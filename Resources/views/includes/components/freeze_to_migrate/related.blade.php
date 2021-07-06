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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
