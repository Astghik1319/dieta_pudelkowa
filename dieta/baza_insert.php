<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatibile" content="IE=egde,chrome=1" />
	
	<title>Dieta pudełkowa Lorem Ipsum - Recenzje</title>
	
	<meta name="description" content="Strona internetowa restauracji Lorem Ipsum. Strona stworzona na zaliczenie przedmiotu Programowanie aplikacji internetowych" />
	<meta name="keywords" content="restauracja, jedzenie, włoska kuchnia, pizza, makaron" />
	
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="css/fontello.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Barlow+Semi+Condensed:ital@1&family=EB+Garamond:ital,wght@1,800&display=swap" rel="stylesheet">
</head>
<form action="" method="post">
<h2>Dodaj recenzję</h2>
<div class="rec">
<table class="adding">
<tr>
<td>Imię autora:</td>
<td><input type="text" name="op_name" size=30 maxsize=30 /></td>
</tr>
<tr>
<td>Ocena:</td>
<td><input type="text" name="op_note" size=30 maxsize=30 /></td>
</tr>
<tr>
<td>Tytuł recenzji:</td>
<td><input type="text" name="op_title" size=30 maxsize=30 /></td>
</tr>
<tr>
<tr>
<td>Treść recenzji:</td>
<td><input type="text" name="op" size=30 maxsize=300 /></td>
</tr>
<tr>
<td>Adres-email:</td>
<td><input type="text" name="op_email" size=30 maxsize=30 /></td>
</tr>
</table>
</br>
<input type="submit" name="akcja" value="Załóż konto" />
<input type="submit" name="akcja" value="Porzuć" />
</form>
</div>
<?php

$akcja=$_POST[akcja];
if(isset($_POST['op_name']) && $akcja=='Dodaj')
{
    $op_name = $_POST ['op_name'];
    $op_note= $_POST ['op_note'];
    $op_title= $_POST ['op_title'];
    $op= $_POST ['op'];
	$op_emaiol= $_POST ['op_email'];
  try {
        include "baza_link.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';
    $sql = "INSERT INTO opinions (op_name, op_note, op_title, op, op_email) VALUES ('$op_name', '$op_note', '$op_title', '$op', '$op_email')";
  $conn->exec($sql);
    echo "Rekord został dodany do tabeli <br><br>";

    include 'baza_tabela.php';
    $conn = null;


  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }

}

?>
<br>
<a href="baza_menu.php"> Powrót </a>

</html>