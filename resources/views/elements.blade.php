<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bebidas del mundo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{route('index')}}" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Bebidas Cool</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{route('inicio')}}">Inicio</a></li>
							<li><a href="{{route('noalcohol')}}">Bebidas Alcoholicas</a></li>
							<li><a href="{{route('alcohol')}}">Bebidas NO Alcoholicas</a></li>
							<li><a href="{{route('index')}}">Vodka</a></li>
							<li><a href="">Nosotros</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Bienvenedio a las BEBIDAS DEL MUNDO</h1>
								<p>Aqui estan todas las bebidas.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/bebidas-alcoholicas.jpg" alt="" />
									</span>
									<a href="{{route('alcohol')}}">
										<h2>Bebidas Alcoholicas</h2>
										<div class="content">
											<p>Bebidas embrigantes</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/bebidas-no-alcoholicas.jpeg" alt="" />
									</span>
									<a href="{{route('noalcohol')}}">
										<h2>Bebidas No Alcoholicas</h2>
										<div class="content">
											<p>Zumos y bebidas hidratantes</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/vodka.jpg" alt="" />
									</span>
									<a href="{{route('index')}}">
										<h2>Vodka</h2>
										<div class="content">
											<p>Bebida alcoholica</p>
										</div>
									</a>
								</article>
							</section>	
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>