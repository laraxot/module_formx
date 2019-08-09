<?php
namespace Modules\FormX\Services;

use Illuminate\Translation\Translator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Cache;

use Collective\Html\FormFacade as Form;
use Illuminate\Support\Facades\View;

//---- services ---
use Modules\Theme\Services\ThemeService;
use Modules\Extend\Services\RouteService;


class FormXService {

	public static function registerComponents(){
	    //$view_path=dirname(\View::getFinder()->find('extend::includes.components.form.text')); //devo dargli una view esistente di partenza
    	$view_path=__DIR__.'/../Resources/views/includes/components/form';
    	$blade_component='components.blade.input';
        $views=[];

        if(in_admin()){
            $views[]='adm_theme::layouts.'.$blade_component;
            $views[]='pub_theme::layouts.'.$blade_component;
            $views[]='themex::layouts.'.$blade_component;
        }else{
            $views[]='pub_theme::layouts.'.$blade_component;
            $views[]='adm_theme::layouts.'.$blade_component;
            $views[]='themex::layouts.'.$blade_component;
        }
        /*
        non esistono perche' non sono registrati ancora i namespace
        foreach($views as $view_check){
            echo '<li>'.$view_check.'['. View::exists($view_check).']</li>';
        }
        
        $blade_component=collect($views)->first(function ($view_check) { 
            return View::exists($view_check);
        });
        */        
        $blade_component=$views[0];
        /*
    	if(in_admin()){  
    	    $blade_component='adm_theme::includes.'.$blade_component;
    	}else{
        	$blade_component='pub_theme::layouts.'.$blade_component;
   		}
        */
    	if(!File::exists($view_path.'/_components.json')){
        	$files = File::allFiles($view_path);
        	$comps=[];
        	foreach($files as $file){
            	$filename=$file->getRelativePathname();
            	$ext='.blade.php';
            	if(ends_with($filename,$ext)){
                	$base=substr(($filename),0,-strlen($ext));
                	$name=str_replace(DIRECTORY_SEPARATOR,'_',$base);
                	$name='bs'.studly_case($name);
                	$comp_view=str_replace(DIRECTORY_SEPARATOR,'.',$base);
                	$comp_view='formx::includes.components.form.'.$comp_view;
                	$comp=new \StdClass();
                	$comp->name=$name;
                	$comp->view=$comp_view;
                	$comp->base=$base;
                	$comp->dir=realpath($file->getPath());
                	$comps[]=$comp;
            	}//endif 
        	}//end foreach
        	File::put($view_path.'/_components.json',json_encode($comps));
    	}else{
        	$comps=File::get($view_path.'/_components.json');
        	$comps=json_decode($comps);
    	}
    	foreach($comps as $comp){
        	Form::component($comp->name, $comp->view,
                    ['name', 'value' => null,'attributes' => [],
                    'options' => [],
                    //'lang'=>$lang,
                    'comp_view'=>$comp->view,
                    'comp_dir'=>realpath($comp->dir),
                    'comp_ns'=>implode('.',array_slice(explode('.',$comp->view),0,-1)),
                    'blade_component'=>$blade_component]
                );
    	}//end foreach
    }//end function


    public static function registerMacros(){
        //$macros_dir=extend::getPath().'/Form/Macros';
        $macros_dir=__DIR__.'/../Macros';
        Collection::make(glob($macros_dir.'/*.php'))
            ->mapWithKeys(function ($path) {
                return [$path => pathinfo($path, PATHINFO_FILENAME)];
            })
            ->reject(function ($macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($macro, $path) {
                $class = '\\Modules\\FormX\\Macros\\'.$macro;
                //app($class)();
                //echo '<hr/>'.$class.'<br/>';
                //\Form::macro(Str::camel($macro), app($class)());
                if($macro!='BaseFormBtnMacro'){
                    Form::macro('bs'.Str::studly($macro), app($class)());
                }
                //ddd($path);
            });
    }//end function

    /*
    When the element is displayed after the call to freeze(), only its value is displayed without the input tags, thus the element cannot be edited. If persistant freeze is set, then hidden field containing the element value will be output, too.
    */

    public static function inputFreeze($params){
        extract($params);
        /*
        switch($field->type){
            case 'Cell':return self::inputFreezeCell($params);
            case 'PivotFields':return self::inputFreezePivotFields($params);
            case 'RelatedFields':return self::inputFreezeRelatedFields($params);
            case 'Color':return self::inputFreezeColor($params);
        }
        
        $field_name=str_replace(['[',']'],['.',''],$field->name);
        $field_value=Arr::get($row,$field_name);
        return $field_value;
        */
        $field->name_dot=str_replace(['[',']'],['.',''],$field->name);
        if(in_array('value',array_keys($params))) {  
            $field->value=$value;
        }else{            
            $field->value=Arr::get($row,$field->name_dot);
        }
        if(isset($label)){
            $field->label=$label;    
        }

        $tmp=Str::snake($field->type);
        $tmp=str_replace('_','.',$tmp);
        $view='formx::includes.components.freeze.'.$tmp;

        $view_params=$params;

        $view_params['row']=$row;
        $view_params['field']=$field;
        //$row_methods=get_class_methods($row);
        if(method_exists($row, $field->name)){
            $rows=$row->{$field->name}();
            /*
            debug_getter_obj(['obj'=>$rows]);
            getForeignPivotKeyName  post_id
            getRelatedPivotKeyName  related_id
            getMorphType    post_type
            */
            $fields_exclude=[];
            $fields_exclude[]='id';
            $fields_exclude[]=$rows->getForeignPivotKeyName();
            $fields_exclude[]=$rows->getRelatedPivotKeyName();
            $fields_exclude[]=$rows->getMorphType();
            $fields_exclude[]='related_type'; //-- ??

            $related=$rows->getRelated();
            $related_pivot=ThemeService::panelModel($related);

            $pivot_class=$rows->getPivotClass();
            $pivot=new $pivot_class;
            $pivot_panel=ThemeService::panelModel($pivot);
            $pivot_fields=$pivot_panel->fields();
            //--------
            $view_params['rows']=$rows->get();   //->GroupBy('post_id');
            $view_params['related']=$related->get();
            $view_params['pivot_panel']=$pivot_panel;

            $pivot_fields=collect($pivot_fields)->filter(function($item) use($fields_exclude) {
                return !in_array($item->name,$fields_exclude);
            })->all();
            $view_params['pivot_fields']=$pivot_fields;
        }
        //------

        return view($view)
                ->with($view_params)
        ;
        //$method='inputFreeze'.$field->type;

        //ddd($method);
        //return self::$method($params);
    }

    public static function inputFreezeText($params){
        extract($params);
        return $field->value;
    }

    public static function inputFreezeId($params){
        extract($params);
        return $field->value;
    }

    public static function inputFreezeInteger($params){
        extract($params);
        return $field->value;
    }


    public static function inputFreezeColor($params){
        extract($params);
        //$field_name=str_replace(['[',']'],['.',''],$field->name);
        //$field_value=Arr::get($row,$field_name);
        return '<div class="p-3 mb-2" style="background-color:'.$field->value.';">&nbsp;'.'</div>';
    }


    public static function inputFreezeCell($params){
        extract($params);
        $html='';
        foreach($field->fields as $k=>$v){
            $html.=self::inputFreeze(['row'=>$row,'field'=>$v]).'<br/>';
        }
        return $html;
    }//end inputFreezeCell

    public static function inputFreezeRelatedFields($params){
        extract($params);
        $rows=$row->{$field->name}();
        $related=$rows->getRelated();
        $related_pivot=ThemeService::panelModel($related);
        $except=[$rows->getForeignKeyName()];
        $related_fields=collect($related_pivot->fields())
                ->filter(function($item) use ($except){
                    return !in_array($item->name,$except);
                })
                ->all();
        $url=RouteService::urlRelated([
            'row'=>$row,
            'related'=>$related,
            'related_name'=>Str::singular($field->name),
            'act'=>'index', 
        ]);

        $view='formx::includes.components.freeze.related';
        return view($view)
                ->with('rows',$rows->get())
                ->with('fields',$related_fields)
                ->with('manage_url',$url);
                ;
    }

    public static function inputFreezePivotFields($params){
        extract($params);
        $rows=$row->{$field->name}();
        $pivot_class=$rows->getPivotClass();
        $pivot=new $pivot_class;
        //ddd(get_class($pivot));
        //ddd(get_class($row));//Modules\Food\Models\Restaurant
        //ddd($field->name);//ratings
        $pivot_panel=ThemeService::panelModel($pivot);
        //ddd(get_class($pivot_panel));//ratings
        $pivot_fields=$pivot_panel->fields();
        $related=$rows->getRelated();
        $all=$related->get();
        $view='formx::includes.components.freeze.pivot.fields';
        return view($view)
                ->with('row',$row)
                ->with('related',$all)
                ->with('pivot_fields',$pivot_fields)
                ;   
        /* 
        $html='<table>';
        foreach($rows->get() as $v){
            ddd($v);
            $html.='<tr>';
            foreach($pivot_fields as $pf){
                $val=$v->{$pf->name};
                $html.='<td>'. $pf->name .'</td><td>'.$val.'</td>';
            }
            $html.='</tr>';
        }
        $html.='</table>';
        return $html;
        */
    }


    public static function inputHtml($params){
        extract($params);
        $input_type='bs'.studly_case($field->type);
        $input_name=collect(explode('.',$field->name))->map(function ($v, $k){
            return $k==0?$v:'['.$v.']';
        })->implode('');
        $input_value=(isset($field->value)?$field->value:null);
        $col_bs_size=isset($field->col_bs_size)?$field->col_bs_size:12;

        if(!isset($field->attributes)  || !is_array($field->attributes)) $field->attributes=[];
        $input_attrs=$field->attributes;
        if(isset($field->fields)){
            $input_attrs['fields']=$field->fields;
        }
        $div_exludes=['Hidden','Cell'];
        $input_opts=['field'=>$field];
        if(!in_array($field->type,$div_exludes)){
            return '<div class="col-sm-'.$col_bs_size.'">'.Form::$input_type($input_name,$input_value,$input_attrs,$input_opts).'</div>';
        }
        return Form::$input_type($input_name,$input_value,$input_attrs,$input_opts);

    }

}//end class
