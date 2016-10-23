<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <link href="css/project.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="applijegleryion/x-javascript">
	addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
	}, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery-1.11.1.min.js"></script>



    <!--//webfonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

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
</div>
<div id="blog_con">
    <div class="wrapper">

            <ul>
                <?php foreach ($blogs as $blog){?>
                    <li>
                        <img src="<?php echo $blog->img?>" alt="">
                        <p class="desc"><?php echo $blog->content?></p>
                        <span class="info"><a href="#" class="read">READ</a></span>
                    </li>
                <?php }?>

            </ul>

        

        <div id="more">
            <button id="btn">加载更多.......</button>

        </div>
    </div>

</div>



<script type="text/javascript" src="js/project.js"></script>
</body>
</html>