<?php

namespace Modules\FormX\Http\Livewire;

/*
 * https://github.com/kdion4891/laravel-livewire-forms/blob/master/src/FormComponent.php.
 */

use Illuminate\Support\Arr;
use Livewire\Component;
use Modules\FormX\Services\FieldService;
use Modules\FormX\Traits\FollowsRules;
use Modules\FormX\Traits\HandlesArrays;
use Modules\FormX\Traits\UploadsFiles;

//use Kdion4891\LaravelLivewireTables\Traits\ThanksYajra;

abstract class XotBaseFormComponent extends Component {
    use FollowsRules;
    use UploadsFiles;
    use HandlesArrays;

    public $model;
    public $form_data;
    private static $storage_disk;
    private static $storage_path;

    protected $listeners = ['fileUpdate'];

    public function mount($model = null) {
        $this->setFormProperties($model);
    }

    public function setFormProperties($model = null) {
        $this->model = $model;
        if ($model) {
            $this->form_data = $model->toArray();
        }

        foreach ($this->fields() as $field) {
            if (! isset($this->form_data[$field->name])) {
                $array = in_array($field->type, ['checkbox', 'file']);
                $this->form_data[$field->name] = $field->default ?? ($array ? [] : null);
            }
        }
    }

    public function render() {
        return $this->formView();
    }

    public function formView() {
        $view = 'formx::livewire.form';
        $view_params = [
            'view' => $view,
            'fields' => $this->fields(),
        ];

        return view($view, $view_params);
    }

    public function fields() {
        return [
            FieldService::make('Name')->input()->rules(['required', 'string', 'max:255']),
            FieldService::make('Email')->input('email')->rules(['required', 'string', 'email', 'max:255', 'unique:users,email']),
            FieldService::make('Password')->input('password')->rules(['required', 'string', 'min:8', 'confirmed']),
            FieldService::make('Confirm Password', 'password_confirmation')->input('password'),
        ];
    }

    public function updated($field) {
        //$this->validateOnly($field, $this->rules(true));
    }

    public function submit() {
        //$this->validate($this->rules());
        dddx($this->form_data);
        $field_names = [];
        foreach ($this->fields() as $field) {
            $field_names[] = $field->name;
        }
        $this->form_data = Arr::only($this->form_data, $field_names);

        $this->success();
    }

    public function errorMessage($message) {
        return str_replace('form data.', '', $message);
    }

    public function success() {
        //$this->form_data['password'] = bcrypt($this->form_data['password']);
        //\App\User::create($this->form_data);
        dddx($this->form_data);
    }

    public function saveAndStay() {
        $this->submit();
        $this->saveAndStayResponse();
    }

    public function saveAndStayResponse() {
        return redirect()->route('users.create');
    }

    public function saveAndGoBack() {
        $this->submit();
        $this->saveAndGoBackResponse();
    }

    public function saveAndGoBackResponse() {
        return redirect()->route('users.index');
    }
}
