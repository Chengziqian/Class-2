<html>
<head>
    @include('index.head')
</head>
    <body>
        @include('component.navbar')
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                  <div class="card {{$info>0?'green accent-2':'red darken-2'}}">
                    <div class="card-content white-text">
                      <span class="card-title">提示</span>
                      <p>@php
                          switch ($info) {
                              case 1:
                                  echo '修改密码成功';
                                  break;
                              case -1:
                                  echo '原密码错误';
                                  break;
                              case 2:
                                  echo '邮箱修改成功';
                                  break;
                              case -2:
                                  echo '密码错误，邮箱修改失败';
                                  break;
                          }
                          @endphp</p>
                    </div>
                    <div class="card-action">
                      <a href="{{route('usercenter.index')}}">返回</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
