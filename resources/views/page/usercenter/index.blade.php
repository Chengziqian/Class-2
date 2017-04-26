<html>
    @include('index.head')
    <body>
        @include('component.navbar')
        <div class="container">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header "><i class="material-icons">view_list</i>基本信息</div>
                    <div class="collapsible-body">
                        <table class="striped">
                            <tr>
                                <th>项</th>
                                <th>信息</th>
                            </tr>
                            <tr>
                                <td>姓名</td>
                                <td>{{\Auth::user()->name}}</td>
                            </tr>
                            <tr>
                                <td>邮箱</td>
                                <td>@php echo \Auth::user()->email==null?'未设置':\Auth::user()->email @endphp</td>
                            </tr>
                            <tr>
                                <td>学号</td>
                                <td>{{\Auth::user()->stu_code}}</td>
                            </tr>
                            <tr>
                                <td>用户组</td>
                                <td>@php echo \Auth::user()->type==1?'管理员':'普通用户' @endphp</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header "><i class="material-icons">settings</i>账户管理</div>
                    <div class="collapsible-body">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">power_settings_new</i>修改密码</div>
                                <div class="collapsible-body">
                                    <div class="row">
                                        <form id="one" class="col s12" action="{{route('usercenter.cgpassword')}}" method="post">
                                            {{csrf_field()}}
                                        <div class="container">
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="password" type="password" class="validate" name="old_password">
                                              <label for="password">旧密码</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="password" type="password" class="validate" name="new_password">
                                              <label for="password">新密码</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="password" type="password" class="validate" name="repeat_password">
                                              <label for="password">重复新密码</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <button class="btn waves-effect waves-light" type="submit" name="action" style="display:block;margin:0 auto">提交</button>
                                            </div>
                                          </div>
                                        </div>
                                        </form>
                                      </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">turned_in_not</i>修改邮箱</div>
                                <div class="collapsible-body">
                                    <div class="row">
                                        <form id="two" class="col s12"  method="post" action="{{route('usercenter.cgemail')}}">
                                            {{csrf_field()}}
                                        <div class="container">
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="password" type="email" class="validate" name="new_email">
                                              <label for="password">设置新邮箱</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="password" type="password" class="validate" name="password">
                                              <label for="password">输入用户密码</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <button class="btn waves-effect waves-light" type="submit" name="action" style="display:block;margin:0 auto">提交</button>
                                            </div>
                                          </div>
                                        </div>
                                        </form>
                                      </div>
                                </div>
                            </li>
                            </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header "><i class="material-icons">info</i>通知中心</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </body>
</html>
