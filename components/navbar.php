<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
	header{
		background: url(img/header-bg.jpg);
		background-size: cover;
		background-position: center;
		min-height: 65%;
	}
	#content{
		min-height: 50%;
	}
	.section{
		padding-top: 4w;
		padding-bottom: 4w;
	}
	@media screen and (max-width: 100%){
		header{
			min-height: 30%;
		}
	}
</style>
<body>

<?php require('links.php'); ?>

<header>
	
<div class="navbar-fixed">
	<nav class="nav-wraper blue">
		<div class="container">
			<a href="#" class="brand-logo">FoodHub</a>
			<a href="#" class="sidenav-trigger" data-target="mobile-menu">
				<i class="material-icons blue">menu</i>
			</a>
			<ul class="right hide-on-med-and-down">
			<li><a href="#">Home</a></li>
			<li><a href="#">Location</a></li>
			<li><a href="#">Reservation</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#" class="btn-floating red darken-4 z-depth-0">
				<i class="material-icons">pic</i>
			</a></li>
			</ul>
		</div>
	</nav>
</div>

<!-- Shows on mobile -->
	<ul class="sidenav" id="mobile-menu">
		<li><a href="#">Home</a></li>
		<li><a href="#">Location</a></li>
		<li><a href="#">Reservation</a></li>
		<li><a href="#">About</a></li>
	</ul>

	<div class="container valign center">
		
			<h1 class="white-text text-darken-2">FoodHub</h1>
		
	</div>
	
</header>

    <script>
    	$(document).ready(function(){
    		$('.sidenav').sidenav();
    	})
    </script>

</body>
</html>