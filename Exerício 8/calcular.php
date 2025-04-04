<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuadas</title>
</head>
<body>
<?php

$numero = $_POST["numero"];


if (($numero)) {
    


    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br></br>";
    }
} else {
    echo "Por favor, insira um número válido.";
}
?>

    
</body>
</html>