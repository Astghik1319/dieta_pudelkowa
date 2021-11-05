<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatibile" content="IE=egde,chrome=1" />
	
	<title>Dieta pudełkowa Lorem Ipsum</title>
	
	<meta name="description" content="Strona internetowa restauracji Lorem Ipsum. Strona stworzona na zaliczenie przedmiotu Programowanie aplikacji internetowych" />
	<meta name="keywords" content="restauracja, jedzenie, włoska kuchnia, pizza, makaron" />
	
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="css/fontello.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Barlow+Semi+Condensed:ital@1&family=EB+Garamond:ital,wght@1,800&display=swap" rel="stylesheet">
</head>
 
<form action="" method="post">
<h2>Przeglądanie recenzji</h2>
<div class="rec">
<?php
//try {
 include "baza_link.php";
// //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo 'Connected to database.<br>';


    $sql = 'SELECT title, rating, content,  nickname FROM opinions';
    $p_lp=0;
    foreach ($conn->query($sql) as $row) {
        $pole1=$row['title'];
        $pole2=$row['rating'];
        $pole3=$row['content'];
        $pole4=$row['nickname'];
        $p_lp++;

        echo "Recenzja numer: $p_lp </br>";
        echo "Tytuł: $pole1 </br>";
        echo "Ocena: $pole2</br>";
        echo "Treść: $pole3</br>";
        echo "Autor: $pole4<br>";
        echo "</br></br>";
    }
    $conn = null;
 

//  } catch(PDOException $err) {
   // echo "Error: unable to connect to database." . $err->getMessage();  }
?>
</div>
</html>			