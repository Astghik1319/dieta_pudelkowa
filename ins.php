<?php  
function insert() {
try{
    $pdo = new PDO("mysql:host=localhost;dbname=dieta", "admin", "admin");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	die("ERROR: Nie udało się połączyć z bazą danych" . $r->getMessage());
}
 

//error_reporting(E_ERROR | E_PARSE);

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