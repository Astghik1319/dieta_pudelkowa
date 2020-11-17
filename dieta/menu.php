<!DOCTYPE HTML>
<html>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatibile" content="IE=egde,chrome=1" />
	
	<title>Dieta pudełkowa Lorem Ipsum - Menu</title>
	
	<meta name="description" content="Strona internetowa restauracji Lorem Ipsum. Strona stworzona na zaliczenie przedmiotu Programowanie aplikacji internetowych" />
	<meta name="keywords" content="restauracja, jedzenie, włoska kuchnia, pizza, makaron" />
	
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="css/fontello.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Barlow+Semi+Condensed:ital@1&family=EB+Garamond:ital,wght@1,800&display=swap" rel="stylesheet">
</head>
<!-- https://dietafigura.pl/jadlospis/ -->

<div id="space"><h2>Nasze diety</h2></div>

<div class="diet-option"><a id="basic"href="#display"><img class="box" src="img/dieta-basic.jpg"></img></a><h3>Dieta odchudzająca</h3></div>

<div class="diet-option-2"><a id="sport" href="#display"><img class="box" src="img/dieta-sport.jpg"></a></img><h3>Dieta dla sportowców</h3></div>

<div style="clear:both;"></div>

<div class="diet-option"><a id="wege" href="#display"><img class="box" src="img/dieta-wege.jpg"></img></a><h3>Dieta wegetariańska</h3></div>

<div class="diet-option-2"><a id="vegan" href="#display"><img class="box" src="img/dieta-vegan.png"></img></a><h3>Dieta wegańska</h3></div>

<div style="clear:both;"></div>

<div class="diet-option"><a id="gluten" href="#display"><img class="box" src="img/dieta-gluten.jpg"></img></a><h3>Dieta bez glutenu</h3></div>

<div class="diet-option-2"><a id="office" href="#display"><img class="box" src="img/dieta-office.jpg"></img></a><h3>Dieta dla mało aktywnych</h3></div>

<div style="clear:both;"></div>

<div id="display">
</div>

<script src="jquery-3.5.1.min.js"></script>

<script>
$("#basic").click(function(){
	$("#display").load("basic.php");
});

$("#sport").click(function(){
	$("#display").load("sport.php");
});

$("#wege").click(function(){
	$("#display").load("wege.php");
});

$("#vegan").click(function(){
	$("#display").load("vegan.php");
});

$("#gluten").click(function(){
	$("#display").load("gluten.php");
});

$("#office").click(function(){
	$("#display").load("office.php");
});
</script> 

</html>