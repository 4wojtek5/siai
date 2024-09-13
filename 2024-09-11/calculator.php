<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num1" palceholder="Number 1">
        <select name="opera">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" palceholder="Number 2">
        <button>Calculate</button>
        </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $opera = htmlspecialchars($_POST["opera"]);
        
        $error = false;
        if(empty($num1) || empty($num2) || empty($opera)){
            echo "<p>FILL</p>";
            $error = true;
        }

        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p>NUMBS!</p>";
            $error = true;
        }

        if(!$error){
            $val = 0;
            switch($opera){
                case "add":
                    $val = $num1 + $num2;
                    break;
                case "subtract":
                    $val = $num1 - $num2;
                    break;
                case "multiply":
                    $val = $num1 * $num2;
                    break;
                case "divide":
                    $val = $num1 / $num2;
                    break;
                default:
                    echo "<p>Sum Ting Wong!</p>";
                    break;
            }
            echo "<p>".$val."</p>";
        }
    }
    ?>
</body>
</html>