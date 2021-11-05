<?php
  $serwer="localhost"; //link to database
$nazwa_bazy="dieta"; //database name
$login="admin";
$pass="admin";
    $conn = new PDO("mysql:host=$serwer;dbname=$nazwa_bazy", "$login", "$pass");


?>