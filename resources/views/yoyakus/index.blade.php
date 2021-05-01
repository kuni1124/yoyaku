@extends('layouts.app')

@section('content')



<div class="form">
<form method="get" action="carender-create">
	<h2>カレンダーから日付を選択してください<h2>
</div>
<div class="text">
	<input type="date" name="date" class=" btn-a">
</div>
<div class="button">
	<input type="submit" value="時間へ" class="btn btn-primary btn-b" >
</div>
</form>
<button onclick="history.back()">戻る</button>    
</div>
@endsection
<style>
.form{
	margin-top:5%;
	margin-left:20%;
}
.text{
	margin-top:5%;
	margin-left:35%;
}
.button{
	margin-top:5%;
	margin-left:35%;
}
.btn-a{
	width:200px;
	height:10%;
}
</style>