@extends('layouts.app')

@section('content')
<div class="container">
         
　　　　　　　　　　　　　   @if (Auth::check())
                                 @foreach($yoyakus as $yoyaku)
                                    <div class="row py-2 border-bottom text-center">
                                       <div class="col-sm-4">
                                           <p>{{ $yoyaku->date }}</p>
                                       </div>
                                       <div class="col-sm-4">
                                          {{ $yoyaku->time }}時に予約されています。
                                       </div>
                                       <div class="col-sm-2">
                                           {!! Form::model($yoyaku, ['route' => ['yoyaku-edit', $yoyaku->id ], 'method' => 'get']) !!}
                                           {!! Form::submit('予約変更', ['class' => 'btn btn-primary']) !!}
                                           {!! Form::close() !!}
                                        </div>
                                       <div class="col-sm-2">
                                         {!! Form::model($yoyaku, ['route' => ['yoyaku-delete', $yoyaku->id ], 'method' => 'delete']) !!}
                                         {!! Form::submit('予約取り消し', ['class' => 'btn btn-danger']) !!}
                                         {!! Form::close() !!}
                                        </div>
                                        
                                    </div>
                                        
                                 @endforeach
                                 
                         @endif 

                         @if (!Auth::check())     
                                @foreach($data as $item)
                                    <div class="row py-2 border-bottom text-center">
                                        <div class="col-sm-4">
                                           <p>{{ $item->date }}</p>
                                        </div>
                                        <div class="col-sm-4">
                                           {{ $item->time }}時に予約されています。
                                        </div>
                                        <div class="col-sm-2">
                                           {!! Form::model($item, ['route' => ['yoyaku-edit', $item->id ], 'method' => 'get']) !!}
                                           {!! Form::submit('予約変更', ['class' => 'btn btn-primary']) !!}
                                           {!! Form::close() !!}
                                        </div>
                                        <div class="col-sm-2">
                                           {!! Form::model($item, ['route' => ['yoyaku-delete', $item->id ], 'method' => 'delete']) !!}
                                           {!! Form::submit('予約取り消し', ['class' => 'btn btn-danger']) !!}
                                           {!! Form::close() !!}
                                        </div>
                                    
                                        
                                    </div>
                                @endforeach
                          @endif 
                        <button onclick="history.back()" class="return btn-primary">戻る</button> 
                       
                    
                    
            </div>
@endsection
<style>
.container{
    background-image: url("../image/istockphoto-826389662-612x612.jpeg");
   
    background-size:cover;
    width:125%;                        /* 画像のサイズを指定    */
    height:100%;                                         /* 横幅のサイズを指定    */
        
    
}
.row{
    font-size:160%;
}

.return{
    margin-top:5%;
    margin-left:50%;
    width:10%;
    height:5%;
}
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */

.return{
    margin-top:15%!important;
    width:100px!important;
    margin-left:120px!important;
}
}
</style>