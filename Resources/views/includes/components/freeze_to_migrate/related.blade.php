<<<<<<< HEAD
<table>
@foreach($rows as $v)
    @if($loop->first)
        <tr>
        @foreach($fields as $vf)
            <td>{{  $vf->name }} </td>
        @endforeach
        </tr>
    @endif
    <tr>
    @foreach($fields as $vf)
        @php
            $val=$v->{$vf->name};
        @endphp
        <td>{{ $val }}</td>
    @endforeach
    </tr>
@endforeach
</table>
<a href="{{ $manage_url }}" class="btn btn-warning">&nbsp;Manage</a>
=======
<table>
@foreach($rows as $v)
    @if($loop->first)
        <tr>
        @foreach($fields as $vf)
            <td>{{  $vf->name }} </td>
        @endforeach
        </tr>
    @endif
    <tr>
    @foreach($fields as $vf)
        @php
            $val=$v->{$vf->name};
        @endphp
        <td>{{ $val }}</td>
    @endforeach
    </tr>
@endforeach
</table>
<a href="{{ $manage_url }}" class="btn btn-warning">&nbsp;Manage</a>
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
