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
<h2>Podaj dane do modyfikacji recenzji</h2>
<div class="rec">
Podaj adres email: <input type="text" name="adres_email" size=40 maxsize=3 /><br><br>
Podaj nową ocenę: <input type="text" name="new_note" size=40 maxsize=3 /><br><br>
Podaj nowy tytuł recenzji: <input type="text" name="new_title" size=40 maxsize=3 /><br><br>
Podaj nową treść recenzji: <input type="text" name="new_op" size=40 maxsize=3 /><br><br>
<input type="submit" name="akcja" value="Zmień" />
<input type="submit" name="akcja" value="Porzuć" />
</div>
</form>
<?php

$akcja=$_POST['akcja'];
if(isset($_POST['tytul'])&& $akcja=="Zmień")
{
    $tytul = $_POST ['tytul'];
       $tytul_nowy = $_POST ['tytul_nowy'];
  try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';
    $sql_update = "UPDATE opinions set op_note='$new_note' and op_title='$new_title' and op='$new_op' where op_email='$adres_email'";
    
 $sql1 = "select * FROM opinions where op_email='$adres_email'";
 // use exec() because no results are returned
    
      $stmt = $conn->query($sql1);
  $rows = $stmt->fetchAll();
  $num_rows = count($rows);
  echo $num_rows ;

if ($num_rows > 0) {
    
    // Prepare statement
 //   $stmt = $conn->prepare($sql_update);

    // execute the query
 //   $stmt->execute();   
    
    $conn->exec($sql_update);
    echo "Recenzja została zmieniona";
}
  else  
    echo "Brak recenzji powiązanej z podanym adresem e-mail";    
    
    include 'baza_tabela.php';
    $conn = null;
  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }
}
?>

<br>
<a href='opinions.php'> Powrót </a>



</html>
