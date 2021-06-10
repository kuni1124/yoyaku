@extends('layouts.app')

@section('content')
<div class="image">
    <img src="image/istockphoto-826389662-612x612.jpeg" >
</div>
<div class="title">
<h2>時間を選択してください</h2>
<div>

    <form action="yoyaku.store" method="post">
    @csrf
        <div class="left">
                <input type="hidden" name="date" value="{{$date}}"><p>{{$date}}日</p><br/>
                @if(!$sumitimes->contains('10'))
                <input type="radio" name="time" value="10" class="height">     10:00~11:00<br/>
                @endif
                @if(!$sumitimes->contains('11'))
                <input type="radio" name="time" value="11" class="height">     11:00~12:00<br/>
                @endif
                @if(!$sumitimes->contains('13'))
                <input type="radio" name="time" value="13" class="height">     13:00~14:00<br/>
                @endif
                @if(!$sumitimes->contains('14'))
                <input type="radio" name="time" value="14" class="height">     14:00~15:00<br/>
                @endif
        </div>
    @if (!Auth::check())
        <div class="right" >
            名前(フルネームで入力してください)<br/>
             <input type="text" name="name" class="name"><br/>
            電話番号（半角数字　000-1111-2222 (半角ハイフォン- 付き）番号は携帯番号も可能)<br/>
             <input type="text" name="tel"  >
        </div>
    @endif
        <input type="submit" value="予約する" class="btn btn-primary">  
    </form>
            
    
@endsection
<style>
.image img{
    position: relative;
    width:125%;
    
}
.height{
    margin-top:30%;
}
.title h2{
    position:absolute;
    top:15%;
    left:25%;
    
}
.left{
    position:absolute;
    top:30%;
    left:25%;
    font-size:200%;
}

.right{
    position:absolute;
    top:32%;
    left:50%;
   
}
.name{
    
    margin-bottom:10%;
    
}

.btn{
    position:absolute;
    top:60%;
    left:50%;
}




@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.image img{
    position: relative;
    width:100%;
    height:650px;
}

.title {
	position:absolute!important;
    top:11%!important;
    left:0%!important;
	width:300px;
}
.left{
    position:absolute!important;
    top:100px!important;
    left:20%!important;
}
.left input{
    margin-top:30px!important;
}
.right{
    
    position:absolute!important;
    top:450px!important;
    left:3%!important;
}
.btn{
    position:absolute;
    top:700px!important;
    left:30%!important;
}
}
</style>
