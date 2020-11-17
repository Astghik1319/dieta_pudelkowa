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

<body>
<form action="" method="post">
<h2>Podaj swoje dane, przeglądanie rekordów w tablicy</h2>
Zawartość do przeszukania: <input type="text" name="zawartosc" size=40 maxsize=3 /><br><br>

<input type="submit" name="akcja" value="Szukaj" />
<input type="submit" name="akcja" value="Porzuć" />
</form>


<?php
$akcja=$_POST[akcja];
if(isset($_POST['zawartosc']) && $akcja=="Szukaj")
{
    $zawartosc = $_POST ['zawartosc'];
  try {

    include 'baza_link.php';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';

    $sql = "SELECT post_author,post_date,post_content, post_title FROM wp_posts where post_title like '%$zawartosc%'";
 
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    $num_rows = count($rows);
    echo $num_rows ;

    if ($num_rows > 0) {
        print "Zawartość tabeli wp_post <br>";
        echo "<table border=3><tr><th>ID autora posta</th><th>Data posta</th><th>Tytuł posta</th></tr>";
        foreach ($conn->query($sql) as $row) {
           $pole1=$row['post_author'];
           $pole2=$row['post_date'];
           $pole3=$row['post_content'];
           $pole4=$row['post_title'];
           echo "<tr><td>" . $pole1. "</td><td>" . $pole2. "</td><td>" . $pole4. "</td></tr>";
         }
         echo "</table>";
    }
    else
    echo "Nie znaleziono rekordów dla zadanego kryterium";
    $conn = null;
  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }

}

?>
<br>
<a href='baza_menu.php'>Powrót</a>
</body>
</html>