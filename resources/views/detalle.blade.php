<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Detalle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{route('index')}}" class="logo">
									<span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">Bebidas Cool</span>
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
							<h1>Detalles de la bebida {{$bebidaseparada['drinks']['0']['strDrink']}}</h1>
							<h2 class="etiqueta">{{$bebidaseparada['drinks']['0']['strCategory']}}</h2>
							<h2 class="etiqueta">{{$bebidaseparada['drinks']['0']['strAlcoholic']}}</h2>
							<h2 class="etiqueta">{{$bebidaseparada['drinks']['0']['strGlass']}}</h2>
							<br>
							<br>
							<div style="background-image: url('../images/pic13.jpg'); background-repeat: no-repeat;background-size: cover">
							<br>
							<img  class="centrar tamaño" src="{{$bebidaseparada['drinks']['0']['strDrinkThumb']}}" alt="" />
							<br>
							</div>
							<h2>Como se hace</h2>
							<p>Los siguientes ingredientes son necesarios para poder realizar esta bebida:</p>
							<ul>
								<li>{{$bebidaseparada['drinks']['0']['strInstructions']}}</li>
								@if($bebidaseparada['drinks']['0']['strInstructionsDE']!=null)
								<li>{{$bebidaseparada['drinks']['0']['strInstructionsDE']}}</li>
								@endif
								@if($bebidaseparada['drinks']['0']['strInstructionsIT'] != null)
								<li>{{$bebidaseparada['drinks']['0']['strInstructionsIT']}}</li>
								@endif
							</ul>
							<h2>Ingredientes para hacer la bebida:</h2>
							<ol>
								@if($bebidaseparada['drinks']['0']['strIngredient1']!=null)
								<li value="1">{{$bebidaseparada['drinks']['0']['strIngredient1']}}  
									@if($bebidaseparada['drinks']['0']['strMeasure1']!=null) 
										- cantidad: {{$bebidaseparada['drinks']['0']['strMeasure1']}}
									@endif
									<a href="{{route('detallei',$bebidaseparada['drinks']['0']['strIngredient1'])}}"class="quitar"><b> Ver detalles</b></a>
								</li>
								@endif
								@if($bebidaseparada['drinks']['0']['strIngredient2']!=null)
								<li>{{$bebidaseparada['drinks']['0']['strIngredient2']}} 
									@if($bebidaseparada['drinks']['0']['strMeasure2']!=null) 
										- cantidad: {{$bebidaseparada['drinks']['0']['strMeasure2']}}
									@endif
									<a href="{{route('detallei',$bebidaseparada['drinks']['0']['strIngredient2'])}}" class="quitar"><b> Ver detalles</b></a>
								</li>
								@endif
								@if($bebidaseparada['drinks']['0']['strIngredient3']!=null)
								<li>{{$bebidaseparada['drinks']['0']['strIngredient3']}} 
									@if($bebidaseparada['drinks']['0']['strMeasure3']!=null) 
										- cantidad: {{$bebidaseparada['drinks']['0']['strMeasure3']}}
									@endif
									<a href="{{route('detallei',$bebidaseparada['drinks']['0']['strIngredient3'])}}" class="quitar"><b> Ver detalles</b></a>	
								</li>
								@endif
								@if($bebidaseparada['drinks']['0']['strIngredient4']!=null)
								<li>{{$bebidaseparada['drinks']['0']['strIngredient4']}} 
									@if($bebidaseparada['drinks']['0']['strMeasure4']!=null) 
										- cantidad: {{$bebidaseparada['drinks']['0']['strMeasure4']}}
									@endif
									<a href="{{route('detallei',$bebidaseparada['drinks']['0']['strIngredient4'])}}" class="quitar"><b> Ver detalles</b></a>
								</li>
								@endif
								@if($bebidaseparada['drinks']['0']['strIngredient5']!=null)
								<li>{{$bebidaseparada['drinks']['0']['strIngredient5']}}
									@if($bebidaseparada['drinks']['0']['strMeasure5']!=null) 
										- cantidad: {{$bebidaseparada['drinks']['0']['strMeasure5']}}
									@endif
									<a href="{{route('detallei',$bebidaseparada['drinks']['0']['strIngredient5'])}}" class="quitar"><b> Ver detalles</b></a>
								</li>
								@endif
							</ol>
							@if($bebidaseparada['drinks']['0']['dateModified']!=null)
							<h2>Fecha de receta</h2>
							<p>Esta receta fue publicada el: <b>{{$bebidaseparada['drinks']['0']['dateModified']}}</b></p>
							@endif
							<h2>Otras bebidas</h2>
							<section class="tiles">
								<article class="style3">
									<span class="image">
										<img src="{{$random1['drinks']['0']['strDrinkThumb']}}" alt="" />
									</span>
									<a href="{{route('detalle',$random1['drinks']['0']['idDrink'])}}">
										<h2>{{$random1['drinks']['0']['strDrink']}}</h2>
										<div class="content">
											<p>{{$random1['drinks']['0']['strCategory']}}</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="{{$random2['drinks']['0']['strDrinkThumb']}}" alt="" />
									</span>
									<a href="{{route('detalle',$random2['drinks']['0']['idDrink'])}}">
										<h2>{{$random2['drinks']['0']['strDrink']}}</h2>
										<div class="content">
											<p>{{$random2['drinks']['0']['strCategory']}}</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="{{$random3['drinks']['0']['strDrinkThumb']}}" alt="" />
									</span>
									<a href="{{route('detalle',$random3['drinks']['0']['idDrink'])}}">
										<h2>{{$random3['drinks']['0']['strDrink']}}</h2>
										<div class="content">
											<p>{{$random3['drinks']['0']['strCategory']}}</p>
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>