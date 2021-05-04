@extends('layouts.app')

@section('content')
<div class="bbb">
    <h1>{{ $user->name }} の前回施術内容入力ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($user, ['route' => ['staff-store', $user->id], 'method' => 'post']) !!}

                <div class="form-group">
                    <h2>{!! Form::label('text', '前回施術内容') !!}</h2>
                    {!! Form::text('text', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('入力', ['class' => 'btn7 btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
<style>


.bbb{
    background-image: url("../image/istockphoto-826389662-612x612.jpeg");
   
    background-size:cover;
    width:125%;                        /* 画像のサイズを指定    */
    height:100%;                                         /* 横幅のサイズを指定    */
    text-align:center;    
    
}


.row{
    text-align:center;
}
.col-6{
    margin-left:25%;
    margin-top:5%;
}



@media screen and (max-width: 768px) {
.form-group{
     width:300px;                              /* 横幅のサイズを指定    */
     
    
}                                          /* 横幅のサイズを指定    */
.col-6{
    margin-left:30px!important; 
    margin-top:5%;
} 
.btn7{
    margin-top:20%;
    margin-left:120px;
}      

}
</style>
