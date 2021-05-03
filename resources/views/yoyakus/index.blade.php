@extends('layouts.app')

@section('content')
<div class="container">
<div class="image">
    <img src="image/istockphoto-826389662-612x612.jpeg" >
</div> 
<div class="title">
  <h2>カレンダーから日付を選択してください<h2>
</div>
<div class="form">
<form method="get" action="carender-create">
	
<div class="text">
	<input type="date" name="date" class=" btn-a">
</div>
<div class="button">
	<input type="submit" value="時間を選ぶ" class="btn btn-primary btn-b" >
</div>
</form>
    <button onclick="history.back()" class="btn1 btn-primary">戻る</button>    
</div>
</div>
@endsection
<style>
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.title h2{
	position:absolute;
    top:11%!important;
    left:0%!important;
	
}
 .image img{
	width:100%;
	position: relative;
    height:600px!important;
    }
.text{
	position:absolute;
    top:30%;
    left:20%!important;
	height:150%;
}
.button{
	position:absolute;
    top:60%!important;
    left:8%!important;
	height:150%;
}
.btn1{
	position:absolute;
    top:60%;
    left: 70%!important;
	height:6%!important;
	width:60px!important;
}

}
.image img{
	width:100%;
	position: relative;
}
.title h2{
	position:absolute;
    top:20%;
    left:30%;
}
.text{
	position:absolute;
    top:30%;
    left:40%;
	height:150%;
}
.button{
	position:absolute;
    top:60%;
    left:30%;
	height:150%;
}
.btn-a{
	width:200px;
	height:10%;
}
.btn1{
	position:absolute;
    top:60%;
    left:60%;
	height:5%;
	width:5%;
}
</style>