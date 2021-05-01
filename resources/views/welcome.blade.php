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
       
  

@media screen and (max-width:800px) {
  .container{
  width:100%;
  }
  .container img{
  position: relative;
  width: 100%!important;
  height: 630px;
  
  /* margin-left:15%; */
}
.container a{
  position: absolute;
   top: 25px;
   left: 15%;
   color: #111111		;
   font-size: 20px!important;
}

.flex{
   
    position: absolute;
    top: 2%;
}
.flex h2{
     position: absolute;
     left:-40px!important;
     
     
    
}
.one h2{
     margin-left:0px;
    position: absolute;
     top: 2%;
     left:10px!important;
    font-size: 10px;
}
.nav-link{
  margin-left:0px!important;
}
.logo p {
  position: absolute;
  top: 20%!important;
  left: 3%!important;
  font-size: 35px!important;
  color: #111111		;
}
.logo2 p {
  position: absolute;
  top: 20%!important;
  left: 42%!important;
  font-size: 35px!important;
  color: #111111		;
}


.yoyaku_coment p{ 
  position: absolute;
  top: 40%!important;
   font-size: 60px!important;
   margin-right:80px!important;
}
.yoyaku_coment{
  text-align:center!important;
  
}

}


.image img{
  position: relative;
  width:125%;
  
  padding-top:0px;
  margin-top:0px;

}
.nav-link1{
  position: absolute;
  top: 30%;
  left: 22%;
  font-size:300%;
  color: #111111		;
}
.nav-link2{
  position: absolute;
  top: 30%;
  left: 62%;
  font-size:300%;
  color:#111111;
}





        </style>
    </head>
  
 <body>
 @extends('layouts.app')

@section('content')
        
          <div class="container">
              <div class="image">
                <img src="image/main.jpeg" alt="文字の代替">
               </div>
            
               
             
               
               <div class="logo">
                 <p>{!! link_to_route('carender-index', '予約する', [], ['class' => 'nav-link1'])!!}</p>
                 
               </div>
               <div class="logo2">
                 
                 <p>{!! link_to_route('search', '予約確認', [], ['class' => 'nav-link2'])!!}</p>
               </div>
               <div class="yoyaku_coment">
                 
               </div>
              </div>           
         @if (!Auth::check())  
              <div class="container">
              
            
               
             
               
               <div class="logo">
                 <p>{!! link_to_route('carender-index', '予約する', [], ['class' => 'nav-link1'])!!}</p>
                 
               </div>
               <div class="logo2">
                 
                 <p>{!! link_to_route('kakuninn-index', '予約確認', [], ['class' => 'nav-link2'])!!}</p>
               </div>
               <div class="yoyaku_coment">
                 
               </div>
              </div>
           @endif   
              
@endsection
　   

                
          
       
    </body>
    
</html>
