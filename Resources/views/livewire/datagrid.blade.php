<div>
    <h3>datagrid</h3>
    <table class="table table-bordered">
        @php
           // print_r($index_fields);
        @endphp
        {{--
        <tr>
        @foreach($index_fields as $field)
        <th>{{ $field->name }}</th>
        @endforeach
        </tr>
        --}}

        @foreach($rows as $row)
        <tr>
            <td>{{ $row->auth_user_id }}</td>
        </tr>
        @endforeach
        {{--
        --}}
    </table>
     {{ $rows->links() }}
</div>
