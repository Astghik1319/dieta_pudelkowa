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
<body>
<form action="" method="post">
<h2>Usuwanie recenzji</h2>
<div class="rec">
Podaj swój adres email: <input type="text" id="email" name="email" size=40 maxsize=3 /><br><br>
<input class="buuton" type="submit" name="submit" value="Usuń" />
</form>
<?php
if(isset($_POST['submit'])) {

try{
   $pdo = new PDO("mysql:host=localhost;dbname=dieta", "admin", "admin");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$a=$_POST['email'];
	
	$sql = "DELETE FROM opinions WHERE email='$a'";

	
	$stmt->exec($sql);
	
} catch (PDOException $e){
	die("ERROR: Nie udało się połączyć z bazą danych" . $r->getMessage());
}
 



}

?>
<br>
<a href='opinions.php'>Powrót</a>
</div>
</body>
</html>