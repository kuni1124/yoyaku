@extends('layouts.app')

@section('content')



<div class="form">

	<h2>予約を取り消しました。<h2>
   
</div>

{!! link_to_route('/', 'HOME', [], ['class' => 'nav-link']) !!}

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
</style>