$(document).ready(function(){

});
function check(){
    var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
    if($("#old_password").val()!=''&&$('#new_password').val()!=''&&$('#re_password').val()!=''){
            if($('#new_password').val()==$('#re_password').val()){
                if ($('#new_password').val().length>=6) {
                    $('#cgpassword').removeClass('disabled');
                    $('#cgpassword_chip').css('display','none');
                }
                else {
                    $('#cgpassword_chip').css('display','inline-block');
                    $('#cgpassword_chip').html('密码不得少于6位<i class="close material-icons">close</i>');
                    $('#cgpassword').addClass('disabled');
                }
            }
            else {
                $('#cgpassword_chip').css('display','inline-block');
                $('#cgpassword_chip').html('两次输入不一致<i class="close material-icons">close</i>');
                $('#cgpassword').addClass('disabled');
            }
    }
    if($('#email').val()!=''&&$('#email_password')!=''){
        var email=$('#email').val();
        if(reg.test(email)){
            $('#cgemail').removeClass('disabled');
            $('#cgemail_chip').css('display','none');
        }
        else {
            $('#cgemail_chip').css('display','inline-block');
            $('#cgemail_chip').html('邮箱不合法<i class="close material-icons">close</i>');
            $('#cgemail').addClass('disabled');
        }
    }
}
