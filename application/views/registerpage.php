<!DOCTYPE html>
<html>
	<?php if (isset($_SESSION['registerlog'])) { echo "<script>alert('" . $_SESSION['registerlog'] . "');</script>"; $this->session->unset_userdata('registerlog'); } ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SocialChef - Social Recipe HTML Template" />
	<meta name="description" content="SocialChef - Social Recipe HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Meals for Makers</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/icons.css" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->
	
	<!--header-->
	<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="Landing" title="Meals for Makers" class="logo"><img src="images/ico/logo2.png" alt="Meals for Makers logo" /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li><a href="Landing" title="Home"><span>Home</span></a></li>
					<li><a href="Recipes" title="Recipes"><span>Recipes</span></a>
					</li>
					<li><a href="Messaging" title="Messaging"><span>Messaging</span></a>
					
					<li class="current-menu-item"><a href="Login" title="Messaging"><span>Login</span></a>
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="Searchrecipes" title="Search for recipes"><i class="icon icon-themeenergy_search"></i> <span>Search for recipes</span></a></li>
				</ul>
			</nav>
		</div>
		<!--//wrap-->
	</header>
	<!--//header-->
		
	<!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
			<div class="row">
			<!--content-->
				<section class="content center full-width">
					<div class="modal container">
						<form action="Register" method="POST">
						<h3>Register</h3>
						<div class="f-row">
							<input type="text" name="lastname" placeholder="Last name" required/>
						</div>
						<div class="f-row">
							<input type="text" name="firstname" placeholder="First name" required />
						</div>
						<div class="f-row">Your birthdate: 
							<input type="date" name="birth" placeholder="Your birthdate" required />
						</div>
						<div class="f-row">
							<input type="email" name="email" placeholder="Your email" required />
						</div>
						<div class="f-row">
							<input type="text" name="contact" placeholder="Contact number" required />
						</div>
						<div class="f-row">
							<input type="text" name="add" placeholder="Your address" required />
						</div>
						<div class="f-row">
							<input type="text" name="username" placeholder="Your username" required />
						</div>
						<div class="f-row">
							<input type="password" name="pass" placeholder="Your password" required />
						</div>
						<div class="f-row">
							<input type="password" name="repeatpass" placeholder="Retype password" required />
						</div>
						
						<div class="f-row bwrap">
							<input type="submit" value="register" />
						</div>
						</form>
						<p>Already have an account yet? <a href="Login">Log in.</a></p>
					</div>
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	</main>
	<!--//main-->
	
	
	<!--footer-->
<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About Meals for Makers</h5>
					A food blogging community that makes cooking fun and simple - a perfect dish every time! Our community offers curated fail-proof recipes that deliver authentic flavors using modern and innovative techniques. </p>
				</article>
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via email</p>
					<p><em>E:</em>  <a href="#">mealsformakers@gmail.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="#" title="instagram"><i class="fa fa-fw fa-instagram"></i></a></li>
						<li><a href="#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2021 Meals for Makers. All rights reserved. Use of this system constitutes acceptance of our <a href="Privacypolicy" title="PrivacyPolicy">Privacy Policy.</a></p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="Landing" title="Home">Home</a></li>
							<li><a href="Recipes" title="Recipes">Recipes</a></li>
							<li><a href="Messaging" title="Messaging" target="_blank">Messaging</a></li>  
							<li><a href="Searchrecipes" title="Search for recipes">Search for recipes</a></li>
							<li><a href="Login" title="Login">Login</a></li>	<li><a href="Register" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->
	
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>


