<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" name="nr1"><br>
        <select name="opr">
            <option value="a">+</option>
            <option value="b">-</option>
            <option value="c">*</option>
            <option value="d">/</option>
            <option value="e">%</option>
        </select><br>
        <input type="number" name="nr2"><br>
        <input type="submit" value="wykonaj dzialanie" name="sub">
    </form>
    <?php
    
    if(empty($_POST["sub"])){exit();}
    
    if(empty($_POST["nr1"]) || empty($_POST["nr2"]) || empty($_POST["opr"])){
        echo "<p>jedno z pól jest puste!</p>"; exit();}
    
    $nr1 = $_POST["nr1"];
    $nr2 = $_POST["nr2"];
    $opr = $_POST["opr"];

    if(is_numeric("nr1") || is_numeric("nr2")){
        echo "<p>liczba 1 lub 2 nie jest liczba</p>"; exit();}

    $val = 0;
    switch($opr){
        case "a":
            $val = $nr1 + $nr2;
            break;
        case "b":
            $val = $nr1 - $nr2;
            break;
        case "c":
            $val = $nr1 * $nr2;
            break;
        case "d":
            $val = $nr1 / $nr2;
            break;
        case "e":
            $val = $nr1 % $nr2;
            break;
        default:
            echo "<p>Sum Ting Wong!</p>";
            exit();
            break;
    }
    echo "<p>Wynik twojego dzialania to: ".$val."</p>";

    ?>
</body>
</html>