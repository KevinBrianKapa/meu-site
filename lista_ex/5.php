<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$chicoAltura = 150; 
$jucaAltura = 110;
$anos = 0;

while ($jucaAltura <= $chicoAltura) {
    $chicoAltura += 2; 
    $jucaAltura += 3; 
    $anos++;
}

echo "Serão necessários $anos anos para que Juca seja maior que Chico.";
?>
</body>
</html>