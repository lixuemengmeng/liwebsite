$(function () {
    $("#sub").on('click',function () {
        var $username=$('#username');
        var $email=$('#email');
        var $phone=$('#phone');
        var $message=$('#message');
        var $blogId=$('#blogId');
        $.post('welcome/add_comment',{
            username:$username.val(),
            email:$email.val(),
            phone:$phone.val(),
            message:$message.val(),
            blogId:$blogId.val()
        },function (data) {
            if(data =='success'){

                    alert('评论成功');
                var myDate= new Date();

                var html=`<li class="comment-li">
                    <div class="comment-info">
                    <span class="username">评论者:`+$username.val()+`</span>
                <span class="post-date">评论时间:`+myDate.toLocaleDateString()+`</span>
                </div>

                <p class="content">评论内容:`+$message.val()+`</p>
                </li>`;
                $('.list').prepend(html);
                $('#comment-num').text(parseInt($('#comment-num').text())+1);
            }else{
                alert('fail');
            }
        },'text')
    });





});