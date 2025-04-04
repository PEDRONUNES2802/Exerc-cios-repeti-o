<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo Decrescente</title>
</head>
<body>
    <h2>Exibir Números com Intervalo Decrescente</h2>
    <form action="calcular.php" method="post">
        <label for="numero">Digite o número inicial:</label>
        <input type="number" id="numero" name="numero" min="0" required><br><br>

        <label for="intervalo">Digite o intervalo:</label>
        <input type="number" id="intervalo" name="intervalo" min="1" required><br><br>

        <input type="submit" value="Exibir Números">
    </form>
</body>
</html>
