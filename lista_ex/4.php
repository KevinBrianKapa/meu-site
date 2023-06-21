<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Digite números:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="number" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $count = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number == 0) {
            exit();
        }

        if ($number >= 100 && $number <= 200) {
            $count++;
        }
    }

    echo "<h3>Quantidade de números entre 100 e 200: $count</h3>";
    ?>
</body>
</html>