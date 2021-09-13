<<<<<<< HEAD
<<<<<<< HEAD
@php
    $val=$field->value;
    $rating=$val;
    /*
	$rating=$val->avg('pivot.rating');
    $rating_avg=$val->avg('pivot.rating');
    $rating_count=$val->count();
    */
@endphp
<ul class="nav nav-inline">
	<li class="nav-item ratings">
        <a class="nav-link" href="#"><span>{{ $field->label ?? ' ' }}
            @foreach(range(1,5) as $i)
                @if($rating >0)
                    @if($rating >0.5)
                        {{--
                        <i class="fa fa-star"></i>
                        --}}
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half-alt"></i>
                        {{--
                        <i class="fa fa-star-half-o"></i>
                        --}}
                    @endif
                @else
                    <i class="far fa-star"></i>
                    {{--
        	        <i class="fa fa-star-o"></i>
                    --}}
                @endif
                @php $rating--; @endphp
            @endforeach
            ({{ $val }}) {{ $field->txt ?? '' }} votes
            {{--
	       ({{ $rating_avg }}) {{ $rating_count }} votes 
	       @if(isset($row->pivot))
	      ( {{ Arr::get($row->pivot,$field->name_dot) }} )({{ $field->name_dot }})
	      @endif
	       --}}
        </span></a>
    </li>
</ul >	
=======
@php
    $val=$field->value;
    $rating=$val;
    /*
	$rating=$val->avg('pivot.rating');
    $rating_avg=$val->avg('pivot.rating');
    $rating_count=$val->count();
    */
@endphp
<ul class="nav nav-inline">
	<li class="nav-item ratings">
        <a class="nav-link" href="#"><span>{{ $field->label ?? ' ' }}
            @foreach(range(1,5) as $i)
                @if($rating >0)
                    @if($rating >0.5)
                        {{--
                        <i class="fa fa-star"></i>
                        --}}
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half-alt"></i>
                        {{--
                        <i class="fa fa-star-half-o"></i>
                        --}}
                    @endif
                @else
                    <i class="far fa-star"></i>
                    {{--
        	        <i class="fa fa-star-o"></i>
                    --}}
                @endif
                @php $rating--; @endphp
            @endforeach
            ({{ $val }}) {{ $field->txt ?? '' }} votes
            {{--
	       ({{ $rating_avg }}) {{ $rating_count }} votes 
	       @if(isset($row->pivot))
	      ( {{ Arr::get($row->pivot,$field->name_dot) }} )({{ $field->name_dot }})
	      @endif
	       --}}
        </span></a>
    </li>
</ul >	
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
    $val=$field->value;
    $rating=$val;
    /*
	$rating=$val->avg('pivot.rating');
    $rating_avg=$val->avg('pivot.rating');
    $rating_count=$val->count();
    */
@endphp
<ul class="nav nav-inline">
	<li class="nav-item ratings">
        <a class="nav-link" href="#"><span>{{ $field->label ?? ' ' }}
            @foreach(range(1,5) as $i)
                @if($rating >0)
                    @if($rating >0.5)
                        {{--
                        <i class="fa fa-star"></i>
                        --}}
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half-alt"></i>
                        {{--
                        <i class="fa fa-star-half-o"></i>
                        --}}
                    @endif
                @else
                    <i class="far fa-star"></i>
                    {{--
        	        <i class="fa fa-star-o"></i>
                    --}}
                @endif
                @php $rating--; @endphp
            @endforeach
            ({{ $val }}) {{ $field->txt ?? '' }} votes
            {{--
	       ({{ $rating_avg }}) {{ $rating_count }} votes 
	       @if(isset($row->pivot))
	      ( {{ Arr::get($row->pivot,$field->name_dot) }} )({{ $field->name_dot }})
	      @endif
	       --}}
        </span></a>
    </li>
</ul >	
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
