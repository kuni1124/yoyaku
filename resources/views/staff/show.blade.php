@extends('layouts.app')

@section('content')
<div class="aaa">
                                 @foreach($users as $user) 
                                    <div class="row py-2 border-bottom text-center">
                                       <div class="col-sm-3">
                                           <p>{{ $user->name }}</p>
                                       </div>
                                       <div class="col-sm-3">
                                          {{ $user->tel }}
                                       </div>
                                       
                                       <div class="col-sm-4">
                                          {{ $user->text  }}
                                       </div>
                                       <div class="col-sm-1">
                                         {!! Form::model($user, ['route' => ['staff-edit', $user->id ], 'method' => 'get']) !!}
                                         {!! Form::submit('変更', ['class' => 'btn btn-primary']) !!}
                                         {!! Form::close() !!}
                                        </div>
                                       <div class="col-sm-1">
                                         {!! Form::model($user, ['route' => ['staff-delete2', $user->id ], 'method' => 'delete']) !!}
                                         {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                                         {!! Form::close() !!}
                                        </div>
                                      
                                    </div>
                                        
                                 @endforeach
　　　　　　　　　　　　　        
                                 <div class="modo">
                                    <button onclick="history.back()" class="btn8 btn-primary">戻る</button>    
                                 </div>
                    
                    
</div>
@endsection
<style>
.aaa{
   background-image: url("../image/istockphoto-826389662-612x612.jpeg");
   
    background-size:cover;
    width:125%;                        /* 画像のサイズを指定    */
    height:100%;                                         /* 横幅のサイズを指定    */
    
}
.row {
  font-size:150%;
}
.btn8{
   
   width:8%;
   height:6%;
   margin-top:10%;
   margin-left:30%;
}
@media screen and (max-width: 768px) {
.aaa{
     width:100%;                              /* 横幅のサイズを指定    */
     
    
}                                          /* 横幅のサイズを指定    */
.btn{
   margin-top:5%;
}
.modo{
   margin-left:17%;
}
.btn8{
   width:20%;
   
   
}
}

</style>