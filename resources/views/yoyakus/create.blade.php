@extends('layouts.app')

@section('content')
<div class="title">
<h2>時間を選択してください</h2>
<div>
<div class="row">
        <div class="col-6">
        <form action="yoyaku.stoer" method="post">
        @csrf
            <div class="form-group row">
            
         <div class="col-md-6">
             <div class="form-check" style="display:flex;">
             <div class="left">
                <input type="hidden" name="date" value="{{$date}}"><p>{{$date}}日</p><br/>
                @if(!$sumitimes->contains('10'))
                <input type="radio" name="time" value="10" ><p>10:00~11:00</p><br/>
                @endif
                <input type="radio" name="time" value="11" ><p>11:00~12:00</p><br/>
                <input type="radio" name="time" value="13" ><p>13:00~14:00</p><br/>
                <input type="radio" name="time" value="14" ><p>14:00~15:00</p><br/>
             </div>
             @if (!Auth::check())
             <div class="right" >
                名前
                <input type="text" name="name"  ><br/>
                電話番号
                <input type="text" name="tel"  ><br/>
             </div>
             @endif
             <input type="submit" value="予約する" class="btn btn-primary">  
         </div>
     </div>
</div>
                
                


        </form>
            {!! Form::close() !!}
    
@endsection
<style>
.title{
    margin-left:25%;
    margin-top:3%;
}
.form-check input{
    margin-top:10%;
    
}
.form-check p{
    font-size:200%;
    width:150%;
}
.right{
    margin-left:80%;
}
</style>