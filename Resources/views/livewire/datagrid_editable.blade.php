<div>
    @php
        //dddx($rows);
    @endphp
{{-- 
<h3>page:{{ $page }} total:{{ $total }}</h3>
@foreach($route_params as $k=>$v)
<br/>{{ $k }} : {{ $v }}
@endforeach
count : {{ $rows->count() }}
<table class="table table-bordered" >
    @foreach($rows as $k=>$v)
        <tr>
            <td> {{ $k }} </td><td> {{ $v->id }}</td>
            <td><livewire:formx::test.row  :row="$v" :index="$loop->index" :key="$v->id" /></td>

        </tr>
    @endforeach
</table>
 --}}
<table class="table table-bordered" >
    <form wire:submit.prevent="rowsUpdate">
    @foreach ($rows as $k=>$v)
        @php
            $panel_fields = Panel::get($v)->editFields();
            $fields = [];
            foreach ($panel_fields as $field) {
                $fields[]= $this->makeField($field->name,$field->type);
            }
        @endphp
        @if($loop->first)
            <tr>
                {{-- <livewire:formx::datagrid_editable.head:row="$v":index="$loop->index":key="$v->id"/> --}}
                @foreach($fields as $field)
                    <th>
                        {{ $field->label }}
                    </th>
                @endforeach
            </tr>
        @endif
        <tr>

            @foreach($fields as $field)
                <td wire:key="row-field-{{ $v->id }}">
                    {{ $field->setPrefix('rows.'.$k)->html($v) }}
                    {{-- 
                    <input type="text" wire:model="rows.{{ $k }}.post.subtitle">
                    --}}
                </td>
            @endforeach

        </tr>
    @endforeach
    <button type="submit">Save</button>
    </form>
</table>

@component('theme::components.pagination.simple',['page'=>$page,'per_page'=>$per_page,'total'=>$total])

@endcomponent


</div>
