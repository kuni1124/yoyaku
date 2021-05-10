<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
       
  




        </style>
    </head>
  
 <body>
 @extends('layouts.app')

 @section('content')
  
                <div class="image">
                  <img src="image/main.jpeg" alt="文字の代替">
                </div> 
                <div class="text"> 
                  <h2>今回はポートフォリオの為、会員ログインするとスタッフ画面に行けるように設計してます。</h2>
                </div>
              
 @endsection    
    </body>
    
</html>
<style>
@media screen and (max-width: 768px) {
/* 768pxまでの幅の場合に適応される */
 .image img{
        width:100%!important;
        height:600px!important;
    }
}
.image img{
  width:130%;
  position: relative;
}
.text h2{
  position:absolute;
  top:20%;
  left:7%;
}
</style>