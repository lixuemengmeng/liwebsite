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
<!--about-->
<div class="about" id="about">
	<div class="container">
		<h3 class="tittle">About Me</h3>
		<div class="col-md-5 ab-grid pic">
			<img src="images/my.jpg" alt=" " title="ab">
		</div>
		<div class="col-md-7 ab-grid text">
			<h4>李雪萌 20岁 黑龙江省鸡西市 现就读于黑龙江大学 计算机技术学院物联网工程</h4>
			<p>现在从事前端工程师 目前掌握html css js nodejs了解php 还有一些框架 还在不断地完善自己的技术</p>
			<p>在校任计算机科学技术学院生活部副部长一职 </p>
			<p>荣获大一学年三等奖学金 acm二等奖等</p>
			<p>性格开朗 喜欢笑 最喜欢猫咪 喜欢听歌 喜欢吃 </p>
			<p>认为睡觉是非常幸福的事</p>

		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//about-->
<!--experience-starts-->
<div class="experience" id="experience">
	<div class="container">
		<h3 class="tittle four">Education & Experience</h3>
		<div class="experience-main">
			<span class="devide-line"></span>
			<div class="experience-left">
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<h4>MASTER OF FINE ARTS</h4>
				<h5>DESIGN UNIVERSITY [ 2011 - 2013 ]</h5>
				<p>Sed a tortor sed ipsum porta iaculis id eget massa. Quisque imperdiet urna sed lorem facilisis, id imperdiet magna dignissim. Maecenas quis dui at magna ullamcorper suscipit. In malesuada, massa at semper fermentum, metus eros imperdiet justo</p>
			</div>
			<div class="experience-left-snd">
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
			</div>
			<div class="experience-right-snd">
				<h4>DESIGN CORPORATION</h4>
				<h5>UX DEVELOPER [ 2013 - 2014 ]</h5>
				<p>Lorem ipsum dolor sit amet, rebum dolore labores cu pri. Ferri iudico scripta ut eam, diceret euismod gubergren has eu, an quo tale vivendum. Ad quidam gubergren vituperatoribus sit. Ius etiam nemore consulatu ne, at meliore explicari conceptam qui.</p>
			</div>
			<div class="experience-left-trd">
				<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
				<h4>CREATIVE DESIGN STUDIO</h4>
				<h5>UX DEVELOPER [ 2016 - 2018 ]</h5>
				<p>Morbi porta eros diam, vel dictum mauris tristique cursus. Curabitur at feugiat nulla. Morbi facilisis vulputate ligula non dignissim. Nunc sagittis non tellus eu hendrerit. Aenean quis enim tristique, lobortis ligula non, sollicitudin tortor.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--experience-end-->

<!--my-skill-->
<div class="my-skills text-center" id="skill">
	<div class="container">
		<h3 class="tittle">My Skills</h3>
		<div class="skill-grids">
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-1"></div>
				<p>框架</p>
			</div>
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-2"></div>
				<p>NODEJS/PHP</p>
			</div>
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-3"></div>
				<p>Html 5 / CSS 3CSS</p>
			</div>
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-4"></div>
				<p>JS JQUERY</p>
			</div>
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-5"></div>
				<p>CSS</p>
			</div>
			<div class="col-md-2 skills-grid text-center">
				<div class="circle" id="circles-6"></div>
				<p>HTML</p>
			</div>
			<div class="clearfix"> </div>
			<script type="text/javascript" src="js/circles.js"></script>
			<script>
				var colors = [
					['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff'], ['#f6608a', '#ffffff']
				];
				for (var i = 1; i <= 7; i++) {
					var child = document.getElementById('circles-' + i),
						percentage = 30 + (i * 10);

					Circles.create({
						id:         child.id,
						percentage: percentage,
						radius:     80,
						width:      10,
						number:   	percentage / 1,
						text:       '%',
						colors:     colors[i - 1]
					});
				}

			</script>
		</div>
	</div>
</div>
<!--//my-skill-->
<!-- projects -->
<div class="projects" id="project">
	<div class="container">
		<div class="project-grids">
			<div class="cycle">
				<span> </span>
			</div>
			<div class="project-grid total-project">
				<p>79</p>
				<h4>Projects</h4>
				<span> <i class="glyphicon glyphicon-edit"> </i></span>
			</div>
			<div class="project-grid clientsgrid">
				<div>
					<p>25</p>
					<h4>Clients</h4>
				</div>
				<span> <i class="glyphicon glyphicon-user"> </i></span>
			</div>
			<div class="project-grid people-grid">
				<div>
					<p>100%</p>
					<h4>Satisfaction</h4>
				</div>
				<span> <i class="glyphicon glyphicon-thumbs-up"> </i></span>
			</div>
			<div class="clearfix"> </div>
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
		<div id="gallery1">
			<h3 class="tittle port" id='ga-title' style="color: white;">我的作品</h3>
			<ul id="myproject">
				<li class="all " ><a href="javascript:;" data-id=0 >all</a></li>
				<?php
				foreach ($categories as $categorie){
					?>
					<li><a href="javascript:;"  data-id="<?php echo $categorie->cate_id?>"><?php echo $categorie->cate_name ?></a></li>
					<?php
				}?>
			</ul>
		</div>
		
			<div class="gallery2">
				<div class="gallery-bottom" >
				<?php
				foreach ($blogs as $blog){
				?>

					<div class="col-md-4 bottom-gallery blog">
						<a href="welcome/view_blog?blogId=<?php echo $blog->blog_id?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?php echo $blog->img?>" />
							<h2  class="blog-h2"><?php echo $blog->title?></h2>
							<h3  class="blog-h3"><?php echo $blog->content?></h3>
						</a>
					</div>
					<?php
					}?>


				</div>
			
			<div class="clearfix"> </div>
		</div>

	</div>
</div>


<!--<!--  <div class="contact" id="contact">-->
<!--       <div class="col-md-6 contact-top">-->
<!--               <div class="point"> <i class="glyphicon glyphicon-map-marker"></i></div>-->
<!--            <h3 class="tittle two">Find Me</h3>-->
<!--            <h4>For Any questions, Please feel free to Contact me by mail.</h4>-->
<!--               <div class="contact-ad">-->
<!--                      <p>Address:Newyork Still Road.756 gt globel Place.<p>-->
<!--                      <p>Phone:Newyork Still Road.756 gt globel Place.<p>-->
<!--                      <p>E-mail :<a href="mailto:info@example.com">mail@example.com</a></p>-->
<!---->
<!--               </div>-->
<!--        </div>-->
<!--        <div class="col-md-6 map">-->
<!--              <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>-->
<!--              <div class="black">-->
<!--                <div class="map-l"> <i class="glyphicon glyphicon-map-marker"></i></div>-->
<!--              </div>-->
<!--          </div>-->
<!--          <div class="clearfix"> </div>-->
<!-- </div> -->
<!--<!--//contact-->
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

<!--start-contact-->
<div class="contact_desc" id="contact">
	<div class="container">
		<h3 class="tittle">Contact Me</h3>
		<div class="contact-form">
			<form class="left_form">
				<div>
					<span><label>NAME</label></span>
					<span><input name="userName" type="text" class="textbox"></span>
				</div>
				<div>
					<span><label>E-MAIL</label></span>
					<span><input name="userEmail" type="text" class="textbox"></span>
				</div>
				<div>
					<span><label>Fax</label></span>
					<span><input name="userPhone" type="text" class="textbox"></span>
				</div>
			</form>
			<form class="right_form">
				<div>
					<span><label>SUBJECT</label></span>
					<span><textarea name="userMsg"> </textarea></span>
				</div>
				<div>
					<input type="submit" value="Submit " />
				</div>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!--footer-->
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

