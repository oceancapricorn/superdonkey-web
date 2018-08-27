<?php
include("header.php");
?>




		<!-- Image slider -->
		<div id="slides" class="carousel slide" data-ride="carousel">
			<div class="carousel-caption">
				<h1 class="display-2">Super Donkey</h1>
				<h3 class="display-2">Juice & Salad Bar</h3>
				<a href="menu.php"><button type="button" class="btn btn-outline-light btn-lg">Meni</button></a>
				<a href="contact.php"><button type="button" class="btn btn-primary btn-lg">Dostava</button></a>
			</div>
			<ul class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/foodmain1.png">
					
				</div>
				<div class="carousel-item">
					<img src="images/avokado2_slide.jpg">

				</div>
				<div class="carousel-item">
					<img src="images/juice_slide.jpg">
				</div>
			</div>
		</div>

	<!-- Welcome Section -->
	<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Built with ease.</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		</div>
	</div>
	</div>


	<!-- Three column section -->
	<div class="container-fluid padding">
		<div class="ikonice row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fa fa-wifi" style="font-size:80px;color:#6c757d"></i>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fa fa-leaf" style="font-size:80px;color:#6c757d"></i>
			</div>
			<div class="col-sm-12 col-md-4">
				<i class="fa fa-paw" style="font-size:80px;color:#6c757d"></i>
			</div>
		</div>
		<hr class="my-4">
	</div>


	<!-- Cards -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/salad.jpg">
					<div class="card-body">
						<h1 class="card-title" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Salate</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis.</p>
						<a href="menu.php" class="btn btn-outline-secondary">Saznaj vise</a>
					</div>
				</div>
			</div>
			
		

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/sokovi.jpg">
					<div class="card-body">
						<h1 class="card-title" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Sokovi</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis.</p>
						<a href="menu.php#sokovi" class="btn btn-outline-secondary">Saznaj vise</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/smoothies.jpg">
					<div class="card-body">
						<h1 class="card-title" style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">Smoothies</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis.</p>
						<a href="menu.php#smoothies1" class="btn btn-outline-secondary">Saznaj vise</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="my-4">
	</div>


		<!-- Two Column Section -->
		<div class="container-fluid padding">
			<div class="row padding">
				<div class="col-lg-6">
					<h2 style="font-family: 'Amatic SC', cursive; font-weight: bold; font-size: 50px;">O nama</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br>
				</div>
				<div>
					<img src="images/onama.jpg" class="class="rounded float-right">
				</div>
			</div>
		<hr class="my-4">
		</div>

<?php 
include ("footer.php");
 ?>