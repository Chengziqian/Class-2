<!DOCTYPE html>
<html>
    @include('index.head')
    <body>
        @include('component.navbar')
        @include('component.slider')
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l3">
                    <a href="#" style="color:white"><div class="card small hoverable teal lighten-3">
                        <div class="card-image" style="text-align:center">
                            <i class="large material-icons" style="display:block;margin-top:20%;">play_arrow</i>
                            </div>
                            <div class="card-content" style="text-align:center">
                            <p style="font-size:24px">班级展示</p>
                        </div>
                    </div></a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="#" style="color:white"><div class="card small hoverable orange lighten-3">
                        <div class="card-image" style="text-align:center">
                            <i class="large material-icons" style="display:block;margin-top:20%;">chat</i>
                            </div>
                            <div class="card-content" style="text-align:center">
                            <p style="font-size:24px">留言板</p>
                        </div>
                    </div></a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="#" style="color:white"><div class="card small hoverable blue-grey lighten-3">
                        <div class="card-image" style="text-align:center">
                            <i class="large material-icons" style="display:block;margin-top:20%;">settings</i>
                            </div>
                            <div class="card-content" style="text-align:center">
                            <p style="font-size:24px">操作中心</p>
                        </div>
                    </div></a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="#" style="color:white"><div class="card small hoverable light-blue lighten-3">
                        <div class="card-image" style="text-align:center">
                            <i class="large material-icons" style="display:block;margin-top:20%;">repeat</i>
                            </div>
                            <div class="card-content" style="text-align:center">
                            <p style="font-size:24px">资料共享</p>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        @include('component.footer')
    </body>
</html>