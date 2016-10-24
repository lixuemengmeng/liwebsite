<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/view.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="applijegleryion/x-javascript">
	addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
	}, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Candal|Raleway:500,600,400' rel='stylesheet' type='text/css'>


    <!--//webfonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
</head>
<body>

<div class="head">
    <div class="header-top">
        <div class="container">
            <!--top-nav-->
            <span class="menu"> </span>
            <div class="top-menu">
                <nav>
                    <ul class="cl-effect-16">
                        <li><a class="active scroll" href="#" data-hover="Home">Home</a></li>
                        <li><a class="scroll" href="#" data-hover="About">About</a></li>
                        <li><a class="scroll" href="#" data-hover="experience">experience</a></li>
                        <li><a class="scroll" href="#" data-hover="Skills">Skills</a></li>
                        <li><a href="welcome/blog_list" data-hover="Projects" >Projects</a></li>
                        <li><a class="scroll" href="#" data-hover="Portfolio">Portfolio</a></li>
                        <li><a class="scroll" href="#" data-hover="Contact">Contact</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </nav>
            </div>
            <div class="login-pop">
                <div id="loginpop"><a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
                    <div id="loginBox">
                        <form id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email">
                                </fieldset>
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="submit" id="login" value="Sign in">
                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                            </fieldset>
                            <span><a href="#">Forgot your password?</a></span>
                        </form>
                    </div>
                </div>
            </div><script src="js/menu_jquery.js"></script>

            <!-- script-for-menu -->
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>
            <!-- script-for-menu -->

            <div class="clearfix"></div>
            <!-- script-for-menu -->
        </div>
    </div>
</div>


<!-- projects -->
<!--portfolio-->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
    //	$(function() {
    //		$('.gallery a').Chocolat();
    //	});
</script>

<div  id="view">
        <h3 class="tittle port" style="color: white;">详情</h3>

            <div id="view-div" >
                <h3  > 标题为:<?php   echo $blogs->title;?></h3>
                    <div id="view-imgs">
                        <img  src="<?php   echo $blogs->img;?>"  />
                    </div>

                    <div id="view-h3">
                        <span>类别:<?php   echo $blogs->cate_name;?>|</span><span>时间为:<?php   echo $blogs->post_date;?>|</span><span> 点击量:<?php   echo $blogs->clicked;?>|</span>
                        <p > 文章内容:<?php   echo $blogs->content;?></p>


                    </div>
                      

                </div>


</div>
<div id="comment">
    <div id="comment-view">
        <h3><span id="comment-num"><?php echo count($blogs->comments )?></span>RESPONSE</h3>
        <ul class="list">
            <?php foreach ($blogs->comments as  $comment) {
                ?>
                <li class="comment-li">
                    <div class="comment-info">
                        <span class="username">评论者:<?php echo $comment->username?></span>
                        <span class="post-date">评论时间:<?php echo $comment->post_date?></span>
                    </div>

                    <p class="content">评论内容:<?php echo $comment->message?></p>
                </li>
                <?php
            }
            ?>

        </ul>
    </div>
    <div id="comment-form">
        <h3>leave a comment</h3>
        <p><input type="hidden"  id="blogId" value="<?php   echo $blogs->blog_id;?>"></p>
            <p><input type="text" placeholder="Name" id="username" name="username"></p>
            <p><input type="email" placeholder="Email" id="email" name="email"></p>
            <p><input type="tel" placeholder="Phone" id="phone" name="phone"></p>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input id='sub' type="button" value="Send">

    </div>

</div>
<script src="js/view.js"></script>

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>

