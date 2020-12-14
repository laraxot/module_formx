<div>
    @php
        //dddx($rows);
    @endphp
    <h3>page:{{ $page }} total:{{ $total }}</h3>
<table class="table table-bordered" wire:ignore>
    <form wire:submit.prevent="rowsUpdate">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-success">
                {{ session('error_message') }}
            </div>
        @endif


        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @foreach ($rows as $index => $row)
            @if($loop->first)
                <tr>
                    @livewire('formx::datagrid_editable.head',['row'=>$row,'index'=>$index],key($row->id))
                </tr>
            @endif
            <tr>
                @livewire('formx::datagrid_editable.row',['row'=>$row,'index'=>$index],key($row->id))
            </tr>
        @endforeach

        {{--
        @foreach ($rows as $index => $row)
            <tr wire:key="row-field-{{ $row->id }}">

                <td>
                    <input type="text" wire:model="rows.{{ $index }}.img" class="form-control">
                    @error("rows.".$index.".img") <span class="alert-danger">{{ $message }}</span> @enderror
                </td>
                <td>
                    <input type="text" wire:model="rows.{{ $index }}.post.title" class="form-control">
                    @error("rows.{{ $index }}.post.title") <span class="alert-danger">{{ $message }}</span> @enderror
                </td>
            </tr>
        @endforeach
        --}}
        <button type="submit">Save</button>
    </form>
</table>
{{--
{!! $rows->links() !!}
--}}
@component('theme::components.pagination.simple',['page'=>$page,'per_page'=>$per_page,'total'=>$total])

@endcomponent


</div>
