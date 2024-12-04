<?php 

require_once "dane.php";
$conn = new mysqli($host, $un, $pass, $db);
if($conn->connect_error) die("Som ting wong!");

$query = "INSERT INTO koty VALUES (NULL, 'mainecoon', 'tofie' , 7)";
$ress = $conn -> query($query);
if(!$ress){die("Error 404");}



?>