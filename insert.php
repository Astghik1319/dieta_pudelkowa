<html lang="pl-PL">

<head>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 

<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
<link href="css/fontello.css" rel="stylesheet" type="text/css" />


</head>

<div class="rec">

<form action="" method="post">

<h2>Dodaj swoją recenzję!</h2>

Podaj swój nick <input type="text" id="nickname" size=30 maxsize=30 name="nickname"/></br>
Podaj swoją ocenę <select id="rating" name="rating">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></br>
Podaj tytuł opinii <input type="text" id="title" size=30 maxsize=30 name="title"/></br>
Wpisz swoją opinię <input type="text" id="content" size=30 maxsize=300 name="content"/></br>
Podaj swój adres email <input type="text" id="email" size=30 maxsize=30 name="email"/></br>

<br>

<input class="button1" type="submit" value="Dodaj" name="submit"/>


</form>

<?php  
if(isset($_POST['submit'])) {

try{
   $pdo = new PDO("mysql:host=localhost;dbname=dieta", "admin", "admin");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
	die("ERROR: Nie udało się połączyć z bazą danych" . $r->getMessage());
}
 



try{
	$sql = "INSERT INTO opinions (title, rating, content, nickname, email) VALUES (:title, :rating, :content, :nickname, :email)";
	$stmt = $pdo->prepare($sql);
	
	$stmt->bindParam(':title', $_REQUEST['title']);
	$stmt->bindParam(':rating', $_REQUEST['rating']);
	$stmt->bindParam(':content', $_REQUEST['content']);
	$stmt->bindParam(':nickname', $_REQUEST['nickname']);
	$stmt->bindParam(':email', $_REQUEST['email']);
	
	$stmt->execute();
} catch (PDOException $e) {
	die("ERROR: Nie udało się dodać recenzji $sql. " . $e->getMessage());

}

}


?>


</div> 
</html>