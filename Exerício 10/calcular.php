<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
<?php

$numero = $_POST["numero"]; 
$intervalo = $_POST["intervalo"]; 


if (($numero) && ($intervalo) && $numero >= 0 && $intervalo > 0) {
    

    
    for ($i = $numero; $i >= 0; $i -= $intervalo) {
        echo $i . "<br>";
    }
} else {
    echo "Por favor, insira valores válidos. O número deve ser maior ou igual a 0 e o intervalo maior que 0.";
}
?>

    
</body>
</html>