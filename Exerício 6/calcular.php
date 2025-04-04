<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros pares</title>
</head>
<body>
<h2>os numeros pares são:</h2>
<?php

$numero = $_POST["numero"]; 


if (($numero) && $numero >= 0) {
 

    
    for ($i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) { 
            echo $i . "<br>";
        }
    }
} else {
    echo "$numero";
}
?>

    
</body>
</html>