<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos Numeros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>O número Sorteado foi...</h1>
<?php 
$numero_aleatorio = rand(1,100);
echo"Número sorteado: " . $numero_aleatorio;
?>
    
</body>
</html>