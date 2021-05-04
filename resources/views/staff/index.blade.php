
@extends('layouts.app')

@section('content')

<div class="test">
    
　　　　　
      @foreach($yoyakus as $yoyaku)
     <div class="staff-delete">
       <div class="row border-bottom"> 
          <div class="col-sm-3">                                
                <h2>名前:{{ $yoyaku->name }}</h2> 
          </div> 
          <div class="col-sm-3">  
                <h2>電話:{{ $yoyaku->tel }}</h2>
          </div> 
          <div class="col-sm-3">  
                <h2 class="date1">日にち:{{ $yoyaku->date }}</h2>
          </div>
          <div class="col-sm-2"> 
                <h2 class="time1">時間:{{ $yoyaku->time }}時〜</h2>
          </div>
          <div class="col-sm-1"> 
                {!! Form::model($yoyaku, ['route' => ['yoyaku-delete', $yoyaku->id ], 'method' => 'delete']) !!}
              {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
          </div>                            
       </div>
     </div>     
     @endforeach
     <div class="bo">
        <div class="fo">
          
          <button class="kaiinn btn-primary"><a href="staff.show">会員情報</a></button>  
        </div> 
        <div class="co">
           <button onclick="history.back()" class="modoru btn-primary" >戻る</button>  
        </div>
        </div>   

        <div class="do">
          <button class="sakuzyo btn-danger"><a href="staff.delete">今日までの予約を削除する</a></button>  
          </div>    
                   
                    
</div>

@endsection

<style>
.test{
    background-image: url("../image/istockphoto-826389662-612x612.jpeg");
   
    background-size:cover;
    width:125%;                        /* 画像のサイズを指定    */
    height:100%;                                         /* 横幅のサイズを指定    */
        
    
}


.bo{
    display:flex;
}

.kaiinn{
    margin-top:75%;
    margin-left:350%;
    color:white;
    width:200%;
    height:35%;
}
.kaiinn a{
  
    color:white;
    
}
.modoru{
    margin-top:30%;
    margin-left:300%;
    
    width:200px;
}
.sakuzyo{
    margin-top:8%;
    margin-left:19%;
}
.sakuzyo a{
    color:white;
    
}

@media screen and (max-width: 768px) {
.test{
    background-image: url("../image/istockphoto-826389662-612x612.jpeg");
   
    background-size:cover;
    width:100%;                        /* 画像のサイズを指定    */
    height:1200px!important;                                           /* 横幅のサイズを指定    */
        
    
}                                          /* 横幅のサイズを指定    */
        
.staff-delete{
    margin-left :4% !important;  
}
.kaiinn{
    margin-top:75%;
    margin-left:30%;
    color:white;
    width:150%;
    height:35%;
}
.modoru{
    margin-top:125%;
    margin-left:300%!important; 
    width:150%;
    height:35%;
}
}
</style>
