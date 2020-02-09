Trang laravel
{{$giatri1}}
<br>
{!!$giatri2!!}
<h3>Vòng lặp for</h3>

@for($i=0; $i < $giatri1; $i++) 
	<h4>Đây là vòng lặp thứ: {{$i}}</h4>
@endfor