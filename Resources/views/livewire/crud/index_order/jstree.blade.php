@php
    Theme::add('https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css');
    Theme::add('https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js');

    
@endphp
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
@push('scripts')
    <script>
        //$(function () { $('#jstree_demo_div').jstree(); });
        $(function () {
            $("#jstree_demo_div").jstree({
                "core" : {
                    'data' : [
                        'Simple root node',
                        {
                            'text' : 'Root node 2',
                            'state' : {
                            'opened' : true,
                            'selected' : true
                            },
                            'children' : [
                            { 'text' : 'Child 1' },
                            'Child 2'
                            ]
                        }
                    ],
                    "check_callback" : true,
                    /* per disabilitare il drag&drop da un livello ad un altro inserire un if
                    'check_callback' : function (operation, node, node_parent, node_position, more) {
                        if (operation === 'move_node' && node.parent !== node_parent.id) {
                            return false;
                        }
                        
                        return true;
                    */


                    },
                "plugins" : [ "dnd" ]
            });
        });
    </script>
@endpush


{{-- esempio per inviare il jason  
https://stackoverflow.com/questions/40900548/how-do-i-save-a-new-jstree-after-drag-and-drop


evento change del json?
https://www.jstree.com/docs/events/

--}}