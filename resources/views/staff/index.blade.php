
@extends('layouts.app')

@section('content')
<div class="container">
               
　　　　　　　　　　　　　  
                                 @foreach($yoyakus as $yoyaku)
                                    <div class="staff">
                                       
                                         <h2>名前：{{ $yoyaku->name }}</h2>  
                                         <h2>電話：{{ $yoyaku->tel }}</h2>
                                         <h2>日にち:{{ $yoyaku->date }}</h2>
                                         <h2>時間:{{ $yoyaku->time }}</h2>
                                      
                                    </div>
                                    <td> {!! Form::model($yoyaku, ['route' => ['yoyaku-delete', $yoyaku->id ], 'method' => 'delete']) !!}
                                         {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                                         {!! Form::close() !!}</td>
                                 @endforeach
                                    <p>{!! link_to_route('staff-show', '会員情報', [], ['class' => 'nav-link1'])!!}</p>
                                    <button onclick="history.back()">戻る</button>    
                                    <p>{!! link_to_route('staff-delete', '今日までの予約を削除する', [], ['class' => 'nav-link1'])!!}</p>
                    
                    
</div>
<style>
.staff h2{
    font-size:150%;
}

</style>
@endsection