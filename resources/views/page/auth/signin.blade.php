<!DOCTYPE html>
<html>
    @include('index.head')
    <body>
    <div class="container">
        <div class="card {{$info==0?'red':'blue'}}" style="width:40%;margin:100px auto">
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width tabs-transparent">
                <li class="tab"><a class="active" href="#test5">{{$info==0?'用户名或密码错误':'登录'}}</a></li>
              </ul>
            </div>
            <div class="card-content white lighten-4">
              <div id="test5">
                  <form class="col s12" action="{{route('auth.signin:action')}}" method="post">
                  {{csrf_field()}}
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="stu_code">
                        <label for="icon_prefix">First Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">power_settings_new</i>
                        <input id="icon_telephone" type="password" class="validate" name="password">
                        <label for="icon_telephone">Password</label>
                      </div>
                    </div>
                  <div class="row">
                      <button class="btn waves-effect waves-light blue" style="display:block;margin:0 auto" type="submit" name="action">登录</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
  </body>
</html>
