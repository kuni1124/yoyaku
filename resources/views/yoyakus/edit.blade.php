@extends('layouts.app')

@section('content')
<div class="container">
<div class="image">
    <img src="../image/istockphoto-826389662-612x612.jpeg" >
</div> 
@if (Auth::check())
　　<div class="zennkai">
 　 　　<h2>前回は{{$user->text}}を行っております。<h2>
　　</div>
@endif
<div class="title">
  <h2>カレンダーから日付を選択してください<h2>
</div>
{!! Form::model($yoyaku, ['route' => ['yoyaku-editb', $yoyaku->id], 'method' => 'post']) !!}

<div class="text">
	<input type="date" name="date" class=" btn-a">
</div>

{!! Form::submit('入力', ['class' => 'btn7 btn-primary']) !!}

{!! Form::close() !!}
@endsection
<style>
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.zennkai{
	position:absolute;
	top:6%!important;
    left:0%!important;
   
}
.title h2{
	position:absolute;
    top:30%!important;
    left:0%!important;
	
}
 .image img{
	width:100%;
	position: relative;
    height:600px!important;
    }
.text{
	position:absolute;
    top:50%!important;
    left:20%!important;
	height:150%;
}
.button{
	position:absolute;
    top:75%!important;
    left:8%!important;
	height:150%;
}
.btn1{
	position:absolute;
    top:75%!important;
    left: 70%!important;
	height:6%!important;
	width:60px!important;
}

}


.zennkai{
	position:absolute;
    top:15%;
    left:25%;
}
.image img{
	width:100%;
	position: relative;
}
.title h2{
	position:absolute;
    top:30%;
    left:30%;
}
.text{
	position:absolute;
    top:40%;
    left:40%;
	height:150%;
}
.button{
	position:absolute;
    top:65%;
    left:30%;
	height:150%;
}
.btn-a{
	width:200px;
	height:10%;
}
.btn1{
	position:absolute;
    top:65%;
    left:60%;
	height:5%;
	width:5%;
}
</style>