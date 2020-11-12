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
<div id="jstree_demo_div">


    {{-- 
    
    <ul>
      <li>Root node 1
        <ul>
          <li id="child_node_1">Child node 1</li>
          <li>Child node 2
            <ul>
                <li id="child_node_2">Child node 2</li>
                <li>Child node 3</li>
            </ul>
          </li>
        </ul>
      </li>
      <li>Root node 2</li>
    </ul>
    --}}
    
</div>
</div>
@push('scripts')
    <script>
        //$(function () { $('#jstree_demo_div').jstree(); });
        $(function () {
            $("#jstree_demo_div").jstree({
                "core" : {
                    'data' : {!! json_encode($tree_nodes_jstree) !!},
                    'check_callback' : mycheck,
                },
                "plugins" : [ "dnd" ]
            });

            function mycheck(operation, node, node_parent, node_position, more) {
                //alert(operation);
                //var res = window.livewire.emit('check_callback', operation, node, node_parent, node_position, more);
                //alert(res);
                return false;
                /*
                console.log('node');
                console.log(node);
                console.log('more');
                console.log(more);
                console.log('operation');
                console.log(operation);
                console.log('node_parent');
                console.log(node_parent);
                console.log('node_position');
                console.log(node_position);
                */
                /*
                if (operation === 'move_node' && node.parent !== node_parent.id ) {
                    return false;
                }else{
                    return true;
                }
                */
                //return false
                //return Livewire.emit('check_callback', operation, node, node_parent, node_position, more)
                /*
                if(operation === 'move_node'){
                    Livewire.emit('mode_node');
                }
                */

            }


        });
    </script>
@endpush


{{-- esempio per inviare il jason  
https://stackoverflow.com/questions/40900548/how-do-i-save-a-new-jstree-after-drag-and-drop


evento change del json?
https://www.jstree.com/docs/events/

--}}