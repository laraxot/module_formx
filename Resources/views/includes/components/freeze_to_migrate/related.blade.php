<<<<<<< HEAD
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
