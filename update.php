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
<h2>Zmiana recenzji</h2>
<div class="rec">
Podaj swój adres email: <input type="text" name="new_email" size=30 maxsize=30 /></br>
Podaj nową ocenę <select name="new_note">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></br>
Podaj nowy tytuł opinii <input type="text" name="new_title" size=30 maxsize=30 /></br>
Edytuj swoją opinię <input type="text" name="new_op" size=30 maxsize=300/></br>
<input class="buuton" type="submit" name="akcja" value="Zmień" />
<input class="buuton" type="submit" name="akcja" value="Porzuć" />
</form>
<?php

//$akcja=$_POST['akcja'];
if(isset($_POST['email'])&& $akcja=="Zmień")
{
    $tytul = $_POST ['tytul'];
       $tytul_nowy = $_POST ['tytul_nowy'];
  try {
    include "opinions/baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';
    $sql_update = "UPDATE opinions set op_note='$new_note' where op_email='$new_email'";
    $sql_update = "UPDATE opinions set op_title='$new_title' where op_email='$new_email'";
    $sql_update = "UPDATE opinions set op='$new_op' where op_email='$new_email'";
    
 $sql1 = "select * FROM opinions where op_email='$new_email'";
    
      $stmt = $conn->query($sql1);
  $rows = $stmt->fetchAll();
  $num_rows = count($rows);
  echo $num_rows ;

if ($num_rows > 0) {
    
    $conn->exec($sql_update);
    echo "Recenzja została zamieniona";
}
  else  
    echo "Błąd: nie znaleziono recenzji powiązanej z podanym adresem e-mail.";    
    
    include 'opinions/opinions.php';
    $conn = null;
  }
  catch(PDOException $err) {
    echo "Błąd: brak połączenia z bazą, za utrudnienia przepraszamy." . $err->getMessage();
  }
}
?>

<br>
<a href='opinions.php'> Powrót </a>

</div>

</body>
</html>
