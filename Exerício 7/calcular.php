<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>de numeros pares a 0</h2>
<?php

$numero = $_POST["numero"];


if (($numero) && $numero >= 0) {



    for ($i = $numero; $i >= 0; $i--) {
        if ($i % 2 == 0) { 
            echo $i . "<br>";
        }
    }
} else {
    echo "Por favor, insira um número válido maior ou igual a zero.";
}
?>
    
</body>
</html>