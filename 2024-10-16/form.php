<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form.php" method="post">
        Wyszukaj:<br>
        <select name="" id=""></select>
        <input type="submit" value="Wyszukaj" name="search">
    </form>
</body>
</html>
<?php 
var_dump($_POST);
require_once "dane.php";
$conn = new mysqli($host, $un, $pass, $db);
if($conn->connect_error) die("Som ting wong!");

$query = "";

$conn -> close();

?>