<nav>
    <div class="nav-wrapper">
    <div class="container">
      <a href="#" class="brand-logo">有个班级</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">reorder</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          @if(\Auth::check())
              <li>{{\Auth::user()->name}}</li>
              <li><a class="waves-effect waves-light btn"  href="{{route('auth.signout:action')}}">登出</a></li>
          @else
              <li><a class="waves-effect waves-light btn"  href="{{route('auth.signin')}}">登陆</a></li>
          @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="" class="waves-effect waves-light btn blue lighten-1">登录</a></li>
        <li><a href="#!"><i class="material-icons">play_arrow</i>班级展示</a></li>
        <li><a href="#!"><i class="material-icons">chat</i>留言板</a></li>
        <li><a href="#!"><i class="material-icons">settings</i>操作中心</a></li>
        <li><a href="#!"><i class="material-icons">repeat</i>资料共享</a></li>
      </ul>
      </div>
    </div>
</nav>
