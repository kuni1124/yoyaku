@extends('layouts.app')

@section('content')

    <div class="date">
        <h2>日付が指定されてないか、無効の日付です。</h2>
        <button onclick="history.back()" class="btn btn-primary">戻る</button>    
    </div>

@endsection
<style>

  .date h2{
      margin-top:10%;
      margin-left:40%;
  }
  .date button{
      margin-top:10%;
      margin-left:55%;
  }
  @media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
.date h2{
      margin-top:10%!important;
      margin-left:5%;
  }
  .date button{
      margin-top:20%;
      margin-left:40%;
  }	
}
</style>