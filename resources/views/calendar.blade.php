@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ $calendar->getTitle() }}</div>
               <div class="card-body">
					{!! $calendar->render() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

<style>
.day-blank {
	background-color: #efefef;
}
.day-sun .day{
	color:red;
}
.day-sat .day{
	color: blue;
}
.calendar table td {	
	padding: 3px;
	border: solid 1px #999;
}
.calendar table td:before {
	display: block;
	float: left;
	height: 50px;
	content: "";
}
.calendar table td .day {
	margin-bottom: 0;
}
.calendar table th {
	text-align: center;
	border: solid 1px #999;
}
</style>