<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatibile" content="IE=egde,chrome=1" />
	
	<title>Dieta pudełkowa Lorem Ipsum</title>
	
	<meta name="description" content="Strona internetowa restauracji Lorem Ipsum. Strona stworzona na zaliczenie przedmiotu Programowanie aplikacji internetowych" />
	<meta name="keywords" content="restauracja, jedzenie, włoska kuchnia, pizza, makaron" />
	
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/fontello.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Barlow+Semi+Condensed:ital@1&family=EB+Garamond:ital,wght@1,800&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

<div class="header">

<div id="restaurant_name">
	<h1><a class="index" href="index.php">Lorem Ipsum</a></h1>
	<h3>Dieta pudełkowa w trosce o Twoje zdrowie</h3>
</div>

<div id="logo"> 
	<img id="restaurant_logo" src="img/restaurant_logo.png" alt="https://icon-icons.com/icon/Food-Dome/116127"/>
</div>
<div style="clear:both;"></div>
</div>
<div class="nav">
	<ol>
	<li><a href="index.php?id=1">Plan diety</a></li>
	<li> <a href="index.php?id=2">Cennik</a></li>
	<li><a href="index.php?id=3">O nas</a>
		<ul><li><a href="index.php?id=4">Nasza filozofia</a></li>
			<li><a href="index.php?id=5">Nasza ekipa</a></li>
		</ul>
	</li>
	<li><a href="opinions.php">Recenzje</a></li>
	<li id="contact">Kontakt <i class="icon-phone"></i> 555-1125</li>
	</ol>
</div>

<div class="wrapper">

<div class="social">
<div id="fb"><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a></div>
<div id="tt"><a href="https://twitter.com/home" target="_blank"><i class="icon-twitter"></i></a></div>
<div id="yt"><a href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"></i></a></div>
<div id="ln"><a href="https://www.linkedin.com/feed/" target="_blank"><i class="icon-linkedin-rect"></i></a></div>
</div>

<div class="covid">
<div class="alert"><i class="icon-attention-circled"></i></div>
<h2>COVID-19</h2>
<h4>W związku z epidemią koronawirusa od dnia <b>24.10.2020</b> jedzenie proszę odbierać <b>w założonej maseczce i w rękawiczkach!</b>.</h4>
</div>

<div class="content">
<?php
error_reporting(E_ALL ^ E_NOTICE);  

	switch($_GET['id']){
	case "1":
		include 'menu.php';
	break;
	
	case "2":
		include 'price.php';
	break;
	
	case "3":
		include 'about.php';
	break;
	
	case "4":
		include 'philosophy.php';
	break;
	
	case "5":
		include 'crew.php';
	break;
	
	default:
		include 'main.php';
}
?>
</div>


</div>

<div style="clear:both;"></div>
<div class="footer"><a href="http://strajkkobiet.eu/" target="_blank"><i class="icon-flash"></i></a>2020 &copy Anna Matyjewicz <a href="mailto: annamatyjewicz@gmail.com"<i class="icon-mail"></i></a>, projekt zaliczeniowy na przedmiot: Programowanie Aplikacji Internetowych  </div>
</div>

<script src="jquery-3.5.1.min.js"></script>
	
	
<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>

<script>

	$(document).ready(function() {
	var NavY = $('.covid').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.covid').addClass('glued');
	} else {
		$('.covid').removeClass('glued'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
<script>

	$(document).ready(function() {
	var NavY = $('.social').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.social').addClass('adhesive');
	} else {
		$('.social').removeClass('adhesive'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
</body>

</html>