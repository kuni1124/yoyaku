@extends('layouts.app')

@section('content')
<div class="image">
    <img src="image/istockphoto-826389662-612x612.jpeg" >
</div> 

       
           
            {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                
                    {!! Form::label('text', '名前:',['class' => 'name',]) !!}
                    {!! Form::text('name' ,'', ['class' => 'namwe-box',] ) !!}
              
                    {!! Form::label('tel', '電話番号:', ['class' => 'tel',]) !!}
                    {!! Form::text('tel' ,'', ['class' => 'tel-box',])!!}
               
                {!! Form::submit('予約確認', ['class' => 'btn btn-primary ']) !!}
            {!! Form::close() !!}
       
        <button onclick="history.back()" class="button btn-primary">戻る</button>    
            
       
    @endsection
    <style>
.image img{
	width:125%;
	position: relative;
}
.name{
	position:absolute;
    top:21%;
    left:25%;
}
.namwe-box{
    position:absolute;
    top:20%;
    left:30%;
    font-size:150%;
}
.tel{
    position:absolute;
    top:36%;
    left:25%;
    
}
.tel-box{
    position:absolute;
    top:35%;
    left:30%;
    font-size:150%;
}
.btn{
    position:absolute;
    top:50%;
    left:28%;
   
}
.button{
    position:absolute;
    top:50%;
    left:43%;
    width:5%;
    height:5%;
}
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.image img{
	width:100%;
	position: relative;
    height:600px;
}
.name{
	position:absolute;
    top:21%;
    left:4%;
}
.namwe-box{
    position:absolute;
    top:20%;
    left:25%;
    font-size:150%;
}	
.tel{
    position:absolute;
    top:36%;
    left:4%;
    
}
.tel-box{
    position:absolute;
    top:35%;
    left:25%;
    font-size:150%;
}
.btn{
    position:absolute;
    top:55%;
    left:15%;
   
}
.button{
    position:absolute;
    top:55%;
    left:60%;
    width:30%;
    height:6%;
}
}
    </style>