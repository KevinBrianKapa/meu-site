<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="quantity">Digite o número de vezes:</label>
        <input type="number" id="quantity" name="quantity" required>
        <input type="submit" value="Imprimir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantity = $_POST["quantity"];

        for ($i = 1; $i <= $quantity; $i++) {
            echo "SOL ";
        }
    }
    ?>
</body>
</html>