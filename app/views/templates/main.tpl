<!DOCTYPE HTML>

<html>

<head>
	<title>Computer's World</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="landing is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="index.php">Computer's World</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="{$conf->action_root}ProductsList">Products</a></li>
					<li><a href="{$conf->action_root}OrdersList">>Orders</a></li>
					<li>
						{if count($conf->roles)>0}
						<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Logout</a>
						{else}
						<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Login</a>
						{/if}
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		{block name=top}
		<section id="banner">
			<h2>Welcome!</h2>
			<p>If you are looking for the cheapest computer components on the market, you've come to the right place.
			</p>
			<ul class="actions special">
				<li><a href="products.php" class="button">Shop now</a></li>
			</ul>
		</section>

		<!-- Main -->
		<section id="main" class="container">

			<section class="box special">
				<header class="major">
					<h2>Store run for years with passion. </h2>
					<p>Thousands of positive opinions and satisfied customers. Join them!</p>
				</header>
				<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
			</section>
		</section>
		{/block}

			{block name=messages}

			{if $msgs->isMessage()}
			<div class="messages bottom-margin">
				<ul>
					{foreach $msgs->getMessages() as $msg}
					{strip}
					<li
						class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">
						{$msg->text}</li>
					{/strip}
					{/foreach}
				</ul>
			</div>
			{/if}

			{/block}


			<!-- CTA -->
			<section id="cta">

				<h2>Sign up for beta access</h2>
				<p></p>

				<form>
					<div class="row gtr-50 gtr-uniform">
						<div class="col-8 col-12-mobilep">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="col-4 col-12-mobilep">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>

			</section>

			<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
