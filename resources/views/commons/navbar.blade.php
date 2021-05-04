<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">HOMEへ</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                       <div class="staff">
                          <p>{!! link_to_route('staff-index', 'スタッフ画面へ', [], ['class' => 'nav-link2'])!!}</p> 
                          <div class="logo">
                         <p>{!! link_to_route('carender-index', '予約する', [], ['class' => 'nav-link1'])!!}</p>
                    </div>
                     <div class="logo2"> 
                         <p>{!! link_to_route('kakuninn-index', '予約確認', [], ['class' => 'nav-link1'])!!}</p>
                     </div>
                       <div class="user-name">
                          <p>{{ Auth::user()->name }}</p>
                        </div>
                            {{-- ログアウトへのリンク --}}
                          <p>{!! link_to_route('logout.get', 'Logout',[], ['class' => 'nav-link2']) !!}</p>
                      </div> 
                    
                @else
                    <div class="logo3">
                         <p>{!! link_to_route('carender-index', '予約する', [], ['class' => 'nav-link4'])!!}</p>
                    </div>
                     <div class="logo3"> 
                         <p>{!! link_to_route('kakuninn-index', '予約確認', [], ['class' => 'nav-link4'])!!}</p>
                     </div>
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item4">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item4">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<style>

.nav-link2{
    color:white;
    width:50px;
    margin-right:30px;
}
.staff {
    color:white;
    display:flex;
    margin-top:5%
}
.user-name{
    margin-right:30px;
}

.nav-link1{
    color:white;
    
}

.logo p{
    
    margin-right:5px;
    width:80px;
    color:white;
}

.logo2 p{
    
    margin-right:5px;
    width:80px;
    color:white;
}
.nav-link4{
    
    color:white;
}
.logo3{
    margin-top:4%;
    margin-right:5%;
    width:80px;
}
</style>