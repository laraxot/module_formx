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
           
            $("#jstree").jstree({
                "core" : {
                    'data' : {!! json_encode($tree_nodes_jstree) !!},
                    'check_callback' : mycheck,
                },
                "types":{!! json_encode($tree_types) !!},
                "plugins" : [ "dnd", "state", "types" ]
            });

            function mycheck(operation, node, node_parent, node_position) {
                @this.checkCallback(operation, node, node_parent, node_position);
                //@this.test(operation, node, node_parent, node_position);
                return false;
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