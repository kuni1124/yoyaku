@extends('layouts.app')

@section('content')
<div class="image">
    <img src="image/istockphoto-826389662-612x612.jpeg" >
</div>



    <div class="test">
	    <h2>予約いたしました<h2>
        <h3>ありがとうございます。当日お待ちしております。<h3>
    </div>


{!! link_to_route('/', 'HOME', [], ['class' => 'nav-link5']) !!}

@endsection
<style>
.image img{
    position: relative;
    width:125%;
}
.test h2{
	position:absolute;
    top:25%;
    left:40%;
}
.test h3{
    position:absolute;
    top:40%;
    left:28%;
}
.nav-link5{
    position:absolute;
    top:60%;
    left:45%;
    font-size:200%;
}
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.image img{
    position: relative;
    width:100%;
    height:600px;
}
.test h2{
	position:absolute;
    top:11%!important;
    left:12%!important;
}
.test h3{
    position:absolute;
    top:40%!important;
    left:4%!important;
}
.nav-link5{
    position:absolute;
    top:60%!important;
    left:30%!important;
    font-size:200%;
}
	
}
</style>