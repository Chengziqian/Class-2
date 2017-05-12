<!DOCTYPE html>
<html>
<head>
    @include('index.head')
</head>
    <body>
        @include('component.navbar')
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col s0 m3"></div>
            <div class="col s12 m6">
                <div class="card {{$info==0?'red':'blue'}}">
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width tabs-transparent">
                        <li class="tab"><a class="active" href="#test5">{{$info==0?'用户名或密码错误':'登录'}}</a></li>
                      </ul>
                    </div>
                    <div class="card-content white lighten-4">
                      <div id="test5">
                          <form action="{{route('auth.signin:action')}}" method="post">
                          {{csrf_field()}}
                              <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate" name="stu_code" value="{{$stu_code}}">
                                <label for="icon_prefix">First Name</label>
                              </div>
                              <div class="input-field">
                                <i class="material-icons prefix">power_settings_new</i>
                                <input id="icon_telephone" type="password" class="validate" name="password">
                                <label for="icon_telephone">Password</label>
                              </div>
                          <div class="row">
                              <button class="btn waves-effect waves-light blue" style="display:block;margin:0 auto" type="submit" name="action">登录</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col s0 m3"></div>
        </div>
      </div>
      @include('component.footer');
  </body>
</html>
