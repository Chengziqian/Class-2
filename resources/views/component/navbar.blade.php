<nav>
    <div class="nav-wrapper">
    <div class="container">
      <a href="{{route('home')}}" class="brand-logo">有个班级</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">reorder</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          @if(\Auth::check())
              <li><a href="{{route('usercenter.index')}}">{{\Auth::user()->name}}</a></li>
              <li><a class="waves-effect waves-light btn"  href="{{route('auth.signout:action')}}">登出</a></li>
          @else
              <li><a class="waves-effect waves-light btn"  href="{{route('auth.signin')}}">登陆</a></li>
          @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
        @if(\Auth::check())
            <li>
                <div class="userView">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <a href="#!user"><img class="circle" src="images/bg.jpg"></a>
                    <a href="#!name"><span class="white-text name">{{\Auth::user()->name}}</span></a>
                    <a href="#!email"><span class="white-text email">{{\Auth::user()->stu_code}}</span></a>
                </div>
            </li>
        @else
            <li><a href="" class="waves-effect waves-light btn blue lighten-1">登录</a></li>
        @endif
        <li><a href="#!"><i class="material-icons">play_arrow</i>班级展示</a></li>
        <li><a href="#!"><i class="material-icons">chat</i>留言板</a></li>
        <li><a href="#!"><i class="material-icons">settings</i>操作中心</a></li>
        <li><a href="#!"><i class="material-icons">repeat</i>资料共享</a></li>
      </ul>
      </div>
    </div>
</nav>
