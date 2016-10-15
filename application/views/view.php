<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
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
<!--start-home-->
<ul class="side_nav">
    <li><a class="active scroll" href="#home"></a></li>
    <li><a class="scroll" href="#about"></a></li>
    <!-- <li><a class="scroll" href="#experience"></a></li> -->
    <li><a class="scroll" href="#skill"></a></li>
    <li><a class="scroll" href="#project"></a></li>
    <li><a class="scroll" href="#myport"></a></li>
    <li><a class="scroll" href="#contact"></a></li>
</ul>
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
                        <li><a class="scroll" href="#" data-hover="Projects">Projects</a></li>
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
    <!--banner-->
    <div class="container">
        <!-- script-for-menu -->
        <div class="banner-info">
            <div class="logo">
                <a href="index.html"><h1 style="font-size:60px">Welcome to my website </h1>
                    <h1 style="font-size:40px;color:#ccc; ">I am lixuemeng</h1></a>
            </div>
            <p style="font-size:20px;color:black; ">welcome to my website   </p>
            <p style="font-size:20px;color:black; ">my name is lixuemeng  </p>
            <p style="font-size:20px;color:black; ">I'm study in heilongjiang university</p>
            <p style="font-size:20px;color:black; ">I'm a web engineer</p>

            <div class="scroll-down">
                <h4>SCROLL DOWN</h4>
                <a class="downarrow scroll" href="#about"><span></span></a>
            </div>
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

<div  class="gallery" id="myport">
    <div class="blog-cate">
        <h3 class="tittle port" style="color: white;">详情</h3>
        <ul id="myproject" style="text-align: center;">


            <?php
            foreach ($blogs as $blog){
            ?>
            <div class="gallery-bottom" >
                <div class="col-md-4 bottom-gallery" id="gallery-content">

                    <div id="gallery-imgs">
                        <img class="img-responsive" src="<?php   echo $blog->img;?>"  />
                    </div>

                    <div id="gallery-h3">
                        <h3  > 标题为:<?php   echo $blog->title;?></h3>
                        <h3 > 文章内容:<?php   echo $blog->content;?></h3>

                    </div>
                      

                </div>
                <?php
                }
                ?>

                <div class="clearfix"> </div>
            </div>

    </div>
</div>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<!-- Javascript calls -->
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('#port a').Chocolat({overlayColor:'#000',leftImg:'images/leftw.gif',rightImg:'images/rightw.gif',closeImg:'images/closew.gif'});
    });
</script>

<!--//portfolio-->


<div class="copy">
    <p>&copy;by lixuemeng<a href="http://w3layouts.com/"></a> </p>
</div>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>

