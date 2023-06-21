<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Digite um número:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Imprimir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        $product = 1;
        for ($i = 1; $i <= $number; $i++) {
            echo "$i ";
            $product *= $i;
        }
        echo "<br>Produto: $product";
    }
    ?>
</body>
</html>