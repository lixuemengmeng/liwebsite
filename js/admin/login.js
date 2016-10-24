$(function () {
   var  $email=$('#email');
    var $pass=$('#pass');
    $email.on('focus',function () {
       if($(this).val()=='email'){
           $(this).val('');
       }
    });
    $email.on('blur',function () {
        if($(this).val()==''){
            $(this).val('email');
        }
    });
});