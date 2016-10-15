
    $(function (){
        $('.blog-cate a').on('click',function(){
          $(this).parent().siblings().children('a').removeClass('activty');
            $(this).addClass('activty');
          var cateId=$(this).data('id');//this.attr('data-id')
            if(cateId==0){
                $.get('welcome/get_allblog',function(data){
                   
                    var  $gallery=$('.gallery2');
                    $gallery.empty();
                    var html="";
                    for(var i=0;i<data.length;i++){

                        html += `
                    <div class="gallery-bottom" >
					<div class="col-md-4 bottom-gallery">
						<a href="welcome/view_blog?blogId=" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="`+data[i].img+`" style="width: 300px;height: 300px;" />
							
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left    b-delay03 "></h3>

							</div>
							<h3  >`+ data[i].content+`</h3>
							<h2  style="font-size: 10px; color:white;">`+data[i].title+` </h2>
						</a>
					</div>
                    `
                    }
                    $gallery.append(html);
                },'json') ;

            }else{
                $.get('welcome/get_blog',{cataId:cateId},function(data){
                    var  $gallery=$('.gallery2');
                    $gallery.empty();
                    var html="";
                    for(var i=0;i<data.length;i++){

                        html += `
                    <div class="gallery-bottom" >
					<div class="col-md-4 bottom-gallery">
						<a href="welcome/view_blog?blogId=" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="`+data[i].img+`" style="width: 300px;height: 300px;" />
							
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left    b-delay03 "></h3>

							</div>
							<h3  >`+ data[i].content+`</h3>
							<h2  style="font-size: 10px; color:white;">`+data[i].title+` </h2>
						</a>
					</div>
                    `
                    }
                    $gallery.append(html);
                },'json');
            }

        })















    });
