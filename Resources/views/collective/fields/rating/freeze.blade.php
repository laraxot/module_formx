<<<<<<< HEAD
@php
	//ddd(get_defined_vars());
	$count=$rows->count();
	$avg=$rows->avg('pivot.rating');
	//ddd($rows->max('rating'));
	/*
	$curr=0;
<i class="fas fa-star-half-alt"></i>
*/
@endphp
@for($i=0;$i<$avg;$i++)
<i class="fas fa-star" style="color:orange;"></i>
@endfor
@for(;$i<5;$i++)
<i class="far fa-star"></i>
@endfor
({{ $avg }}) {{ $count }} voti



=======
@php
	//ddd(get_defined_vars());
    if(!isset($rows)){
        return ;
    }
	$count=$rows->count();
	$avg=$rows->avg('pivot.rating');

	//ddd($rows->max('rating'));
	/*
	$curr=0;
<i class="fas fa-star-half-alt"></i>
*/
@endphp
@for($i=0;$i<$avg;$i++)
<i class="fas fa-star" style="color:orange;"></i>
@endfor
@for(;$i<5;$i++)
<i class="far fa-star"></i>
@endfor
({{ $avg }}) {{ $count }} voti



>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
