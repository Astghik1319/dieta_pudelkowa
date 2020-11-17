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


<?php

//    $sql = "SELECT post_author,post_date,post_content, post_title FROM wp_posts";
   
   $sql = "SELECT * FROM wp_posts";

    print "Zawartość tabeli opinions <br>";
        echo "<table border=3><tr><th>ID autora posta</th><th>Data posta</th><th>Tytuł posta</th></tr>";
    foreach ($conn->query($sql) as $row) {
        $pole1=$row['id'];
		$pole2=$row['op_name'];
        $pole3=$row['op_note'];
        $pole4=$row['op_title'];
        $pole5=$row['op'];
        $pole6=$row['op_email'];
        echo "<tr><td>" . $pole2. "</td><td>" . $pole3. "</td><td>" . $pole4. "</td></tr>". $pole5. "</td></tr>";
    }
        echo "</table>";
?>

</html>