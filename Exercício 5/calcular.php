<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição da frase</title>
</head>
<body>
<fieldset>
    <h1>
    Resultado do programa <br></br>
</h1>
<h2>
    <?php

$q = $_POST['q'];
$f = $_POST['frase'];

for ($a=1; $a<=$q ; $a++) { 
    echo($f.""."<br></br>");
    
}


?>
</h2>
</fieldset>

<style>

h1{
    text-align: center;
    font-family: open;
    border: black solid 2px;
    margin: 20px;
    height: 40px
}

h2{
    text-align: center;
    font-family: open;
    border: black solid 2px;
    padding: 30px;
    margin: 10px;
   
}

</style>
</body>
</html>