$(function () {
    var ioffset=0;
    $('#btn').on('click',function(){
        var that=$(this);
        $(this).hide();
        setTimeout(function(){
            $.get('welcome/get_moreblog',{
                offset:ioffset+=6
            },function(data) {
                var html='';
                for(var i=0;i<data.length;i++){
                    html+=`
                 <li>
                        <img src="`+data[i].img+`" alt="">
                        <p class="desc">`+data[i].content+`</p>
                        <span class="info"><a href="#" class="read">READ</a></span>
                    </li>`;
                }
                $('#blog_con ul').append(html);
                that.show();
            },'json');
        },1000);

    });
});