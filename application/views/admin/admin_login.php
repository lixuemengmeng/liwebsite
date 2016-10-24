<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/admin/login.css" rel='stylesheet' type='text/css' />
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
<div class="banner" id="home">
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
         <script src="js/menu_jquery.js"></script>

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
    <div id="login">
        <div class="wrapper">
            <h3 class="login_h3">个人网站后台登录</h3>
            <div id="login_div">
                <h3>LOGIN</h3>
                <form action="" class="login_form">
                    <p>邮箱:</p>
                    <input type="email" id="email" name="email" value="email">
                    <p>密码</p>
                    <input type="password" id="pass"  name="pass"  >

                    <div id="submit">
                        <input type="submit" id="btn" name="btn" value="登录">
                    </div>

                </form>
            </div>
        </div>




    </div>

</div>

<script src="js/admin/login.js"></script>
</body>
</html>
