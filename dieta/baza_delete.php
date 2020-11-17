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
<h2>Usuwanie recenzji.</h2>
<div class="rec">
Aby usunąć recenzję podaj adres email: <input type="text" name="adres_del" size=30 maxsize=30 /><br><br>
<input type="submit" name="akcja" value="Usuń" />
<input type="submit" name="akcja" value="Porzuć" />
</div>
</form>
<?php
$akcja=$_POST['akcja'];
if(isset($_POST['adres_del']) && $akcja=="Usuń")
{
    $tytul_usun = $_POST ['tytul'];
  try {
    include "baza_link.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';
    $sql = "DELETE FROM opinions where op_email='$adres_del'";
     $sql1 = "select * FROM opinions where op_email='$email_del'";
 // use exec() because no results are returned
    
      $stmt = $conn->query($sql1);
  $rows = $stmt->fetchAll();
  $num_rows = count($rows);
  echo $num_rows ;

if ($num_rows > 0) {
    
    
    $conn->exec($sql);
    echo "Pomyślnie usunięto recenzję";
}
  else  
    echo "Brak recenzji powiązanej z podanym adresem email.";    
    
    
    $sql = "SELECT id, op_name , op_name, op_title, op, op_email FROM opinions";
   
   
    include 'baza_tabela.php';
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