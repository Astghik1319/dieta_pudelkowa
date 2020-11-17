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
<h2>Wyświetl recenzje</h2>
<div class="rec">
<input type="radio" name="wyswietl" 
<?php if (isset($wyswietl) && $wyswietl=="Ogólny") echo "checked";?>
 value="Ogólny">OK
<br>
<input type="submit" name="akcja" value="OK" />
<input type="submit" name="akcja" value="Porzuć" />
</div>
</form>
   


<!-- // przeglądanie tablicy SELECT - projekcja  -->
<?php
$wybrany=$_POST['wyswietl'];
// echo "$wybrany";

$akcja=$_POST['akcja'];
if($akcja=="OK")
{

  try {
    $rodzaj_przegladu=$_POST['przeglad'];
     include "baza_link.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Poprawne połączenie z bazą.<br>';



    $sql = 'SELECT op_name, op_note, op, op_title FROM wp_posts';
    $p_lp=0;
    print "Przeglądanie zawartości tablicy <br>";
    foreach ($conn->query($sql) as $row) {
        $pole1=$row['op_note'];
        $pole2=$row['op_title'];
        $pole3=$row['op'];
        $pole4=$row['op_name'];
        $p_lp++;
  //      print $row['post_author' 'post_date'] . "<br>";
        echo "Recenzja numer: $id:  </br> Ocena: $pole1  </br> Tytuł: $pole2  </br>$pole3 </br>$pole4 <br>";
        echo "<br>";
    }
    $conn = null;

  }
  catch(PDOException $err) {
    echo "Błąd połączenia z bazą: " . $err->getMessage();
  }
}
?>
<br>
<a href="opinions.php">Powrót </a>

</html>