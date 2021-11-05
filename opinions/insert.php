<html lang="pl-PL">

<head>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 

<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
<link href="css/fontello.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
</head>

<div class="rec">

<form action="" method="post">

<h2>Dodaj swoją recenzję!</h2>

Podaj swój nick <input type="text" id="nickname" size=30 maxsize=30 /></br>
Podaj swoją ocenę <select id="rating">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></br>
Podaj tytuł opinii <input type="text" id="title" size=30 maxsize=30 /></br>
Wpisz swoją opinię <input type="text" id="content" size=30 maxsize=300/></br>
Podaj swój adres email <input type="text" id="email" size=30 maxsize=30/></br>

<br>

<input class="buuton" type="submit" name="action" id="buut" value="Dodaj"/>
<!-- <input class="buuton" type="submit" name="action" value="Porzuć" />
-->
</form>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php  
 include "baza_link.php";
 

error_reporting(E_ERROR | E_PARSE);


//$action=$_POST['action'];
//if(isset($_POST['email']) && $action=='Dodaj')

//function insert(){
//$data = [
  //  $p_title = $_POST ['title'],
   // $p_rating= $_POST ['rating'],
//    $p_content= $_POST ['content'],
//    $p_nickname= $_POST ['nickname'],
//    $p_email= $_POST ['email'],
//	];

//try {

//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$query = "INSERT INTO opinions (title, rating, content, nickname, email) VALUES ($p_title, $p_rating, $p_content, $p_nickname, $p_email)";
  	//$conn->exec($sql);
    //echo "Recenzja została dodana</br>";

    //include 'opinions/opinions.php';
    //$conn = null;

//	$sql = 'INSERT INTO opinions (title, rating, content, nickname, email) VALUES ($p_title, $p_rating, $p_content, $p_nickname, $p_email)';//
//	$stmt = $pdo->prepare($sql);
//	$stmt->execute($data);

$title=$_POST['title'];
$rating=$_POST['rating'];
$content=$_POST['content'];
$nickname=$_POST['nickname'];
$email=$_POST['email'];

if(array_key_exists('buut', $_POST)) {
	insert();
}	

function insert() {	
$sql= "INSERT INTO opinions (title, rating, content, nickname, email) VALUES ($title, $rating, $content, $nickname, $email)";
if ($conn->query($sql) === TRUE){
	echo "Dodano recenzję";
}
else {
	echo "Wystąpił błąd";
}
}


 
//	catch(PDOException $err) {
//	echo "Błąd: brak połączenia z bazą, za utrudnienia przepraszamy." . $err->getMessage();
 
//}

//}


?>

<script>
$(document).ready(function(){
	$("#buut").click(function(){
		var title=$("#title").val();
		var rating=$("#rating").val();
		var content=$("#content").val();
		var nickname=$("#nickname").val();
		var email=$("#email").val();
		$.ajax({
			url:'insert.php',
			method:'POST',
			data:{
				title=title,
				rating=rating,
				content=content,
				nickname=nickname,
				email=email
			},
			success:funstion(data){
				alert(data);
			}
		});
	});
});
</script>

</div> 
</html>