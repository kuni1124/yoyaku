@extends('layouts.app')

@section('content')



<div class="form">

	<h2>今日までの予約を削除しました。<h2>
   
</div>

{!! link_to_route('staff-index', '一覧へ戻る', [], ['class' => 'nav-link']) !!}

@endsection
<style>
.form h2{
	margin-top:15%;
	margin-left:30%;
}
.form h3{
    margin-left:15%;
}
.nav-link{
    margin-left:38%;
    margin-top:5%;
    font-size:200%;
}

@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.form h2{
	margin-top:5%;
	margin-left:10%;
}
.form h3{
    margin-left:15%;
}
.nav-link{
    margin-left:38%;
    margin-top:5%;
    font-size:200%;
}
}
</style>