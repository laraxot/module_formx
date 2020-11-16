@php
    Theme::add('https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css');
    Theme::add('https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js');
@endphp
<div>
     @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif

    <div id="jstree" wire:ignore>
        <ul>
      <li>Root node 1
        <ul>
          <li id="child_node_1">Child node 1</li>
          <li>Child node 2</li>
        </ul>
      </li>
      <li>Root node 2</li>
    </ul>
    </div>
</div>
@push('scripts')
    <script>
         //document.addEventListener('livewire:load', function () {
        //@this.test();
        // });

        $(function () {
            var check=[];
            $("#jstree").jstree({
                "core" : {
                    'data' : {!! json_encode($tree_nodes_jstree) !!},
                    'check_callback' : mycheck,
                    /*

                    'check_callback' : function (operation, node, node_parent, node_position) {
                      if (operation == "move_node" && node.type) {
                        if ('area' == node.type && node_parent.type == '#') {
                          return true;
                        }
                        if ('menu' == node.type && node_parent.type == 'area') {
                          return true;
                        }
                        if ('page' == node.type && node_parent.type == 'menu') {
                          return true;
                        }
                      }
                      return false;
                    }
                    */
                    /*
                    'check_callback' : function (operation, node, node_parent, node_position) {
                      {!! $this->check !!}
                    },
                    */


                },
                "types":{!! json_encode($tree_types) !!},
                "plugins" : [ "dnd", "state", "types" ]
            }).bind("dnd_stop.vakata", function(e, data) {
                alert('preso');
            });
            $(document).on('dnd_stop.vakata', function (e, data) {
                //alert('preso');
                /*
                ref = $('#jstree').jstree(true);
                node=ref.get_node(data.element);
                parent = node.parent;
                console.log(node);
                console.log( $('#jstree').data('node'));
                console.log( $('#jstree').data('node_parent'));
                console.log( $('#jstree').data('node_position'));
                */
                var operation = 'dnd_stop.vakata';
                var node= $('#jstree').data('node');
                var node_parent= $('#jstree').data('node_parent');
                var node_position= $('#jstree').data('node_position');
                @this.save(node, node_parent, node_position);
            });

            function mycheck(operation, node, node_parent, node_position) {
                $('#jstree').data('node',node);
                $('#jstree').data('node_parent',node_parent);
                $('#jstree').data('node_position',node_position);
                /*
                let $res=  @this.checkCallback(operation, node, node_parent, node_position);
                $res.then(function(res){
                    return res;
                });
                */
                /*
                try {
                    return await @this.checkCallback(operation, node, node_parent, node_position);
                }catch(e){
                    return false;
                };
                */
                //console.log($res);
                //@this.test(operation, node, node_parent, node_position);
                //return false;
                /*
                check['#-area']=true;
                check['area-area']=false;
                check['menu-area']=false;
                check['page-area']=false;
                */
                check_key=node_parent.type+'-'+node.type;
                res=check[check_key];
                //console.log(check_key);
                //console.log(res);
                //*
                if(res==undefined){
                    check[check_key]='loading';
                    @this.checkCallback(operation, node, node_parent, node_position).then(function(res){
                        check[check_key]=res;
                        console.log('-------------');
                        console.log(check_key);
                        console.log(res);
                    });
                    //res=check[check_key];
                    //console.log('up live');
                    //console.log(check[check_key])
                    return false;
                }
                if(res=='loading'){
                    return false;
                }
                /*
                if(res instanceof Promise){
                    console.log('promise');
                    return false;
                }
                */
                //*/
                console.log(check_key);
                console.log(res);
                return res;
            }

        });
        //*/
    </script>
@endpush


{{-- esempio per inviare il jason
https://stackoverflow.com/questions/40900548/how-do-i-save-a-new-jstree-after-drag-and-drop


evento change del json?
https://www.jstree.com/docs/events/

--}}
