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
Podaj swój adres email: <input type="text" name="del_email" size=40 maxsize=3 /><br><br>
<input class="buuton" type="submit" name="akcja" value="Usuń" />
<input class="buuton" type="submit" name="akcja" value="Porzuć" />
</form>
<?php
//$akcja=$_POST['akcja'];
if(isset($_POST['del_email']) && $akcja=="Usuń")
{
    $del_email = $_POST ['del_email'];
  try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';
    $sql = "DELETE FROM opinions where op_email='$del_email'";
     $sql1 = "select * FROM opinions where op_email='$del_email'";
    
      $stmt = $conn->query($sql1);
  $rows = $stmt->fetchAll();
  $num_rows = count($rows);
  echo $num_rows ;

if ($num_rows > 0) {
    
    
    $conn->exec($sql);
    echo "Pomyślnie usunięto recenzję.";
}
  else  
    echo "Błąd: nie znaleziono recenzji powiązanej z podanym adresem e-mail.";    
    
    
    $sql = "SELECT op_name, op_note, op_title, op, op_email FROM opinions";
   
   
    include 'opinions/opinions.php';
    $conn = null;
  }
  catch(PDOException $err) {
    echo "Błąd: brak połączenia z bazą, za utrudnienia przepraszamy. " . $err->getMessage();
  }
}
?>
<br>
<a href='baza_menu.php'>Powrót</a>
</div>
</body>
</html>