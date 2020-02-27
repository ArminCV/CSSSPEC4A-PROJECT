<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
<nav class="nav-wraper green">
		<div class="container">
			<a href="#" class="brand-logo">Site Title</a>
			<a href="#" class="sidenav-trigger" data-target="mobile-links">
				<i class="material-icons">menu</i>
			</a>
			<ul class="right hide-on-med-and-down">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#" class="btn-floating green darken-4 z-depth-0">
				<i class="material-icons">pic</i>
			</a></li>
			</ul>
		</div>
	</nav>

<!-- Shows on mobile -->
	<ul class="sidenav" id="mobile-links">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	</ul>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$('.sidenav').sidenav();
    	})
    </script>

</body>
</html>