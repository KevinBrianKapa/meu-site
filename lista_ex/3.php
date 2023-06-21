<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Informe 20 números:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<input type='number' name='number[]' required><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST["number"];
        $positiveSum = 0;
        $negativeCount = 0;

        foreach ($numbers as $number) {
            if ($number > 0) {
                $positiveSum += $number;
            } elseif ($number < 0) {
                $negativeCount++;
            }
        }

        echo "<h3>Soma dos números positivos: $positiveSum</h3>";
        echo "<h3>Total de números negativos: $negativeCount</h3>";
    }
    ?>
</body>
</html>