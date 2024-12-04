<?php 

require_once "dane.php";
$conn = new mysqli($host, $un, $pass, $db);
if($conn->connect_error) die("Som ting wong!");

//$query = "SELECT * FROM koty";
$query = "DESCRIBE koty";
$res = $conn -> query($query);
if(!$res){die("HTML ERROR");}

$rows = $res -> num_rows;
//echo "<table><tr><th>ID</th><th>rodzina</th><th>imie</th><th>wiek</th></tr>";
echo "<table><tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";

for($i = 0; $i < $rows; ++$i){
    $r = $res -> fetch_array(MYSQLI_NUM);
    echo "<tr>";
    for($c = 0; $c < count($r); ++$c){
        echo "<td>" . htmlspecialchars($r[$c]) . "</td>";
    }
    echo "</tr>";
}

echo "</table>"

?>