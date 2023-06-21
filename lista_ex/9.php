<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Fatorial</title>
</head>
<body>
    <h2>Cálculo de Fatorial</h2>
    <form method="POST" action="">
        <label for="valor">Digite um valor:</label>
        <input type="number" name="valor" id="valor" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
   //acho que está tudo funcionando certinho
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $valor = $_POST["valor"];

        function calcularFatorial($n) {
            if ($n < 0) {
                return "O fatorial não pode ser calculado para valores negativos.";
            } elseif ($n == 0 || $n == 1) {
                return 1;
            } else {
                $fatorial = 1;
                for ($i = $n; $i >= 1; $i--) {
                    $fatorial *= $i;
                }
                return $fatorial;
            }
        }

        $resultado = calcularFatorial($valor);
        echo "<p>O fatorial de $valor é: $resultado</p>";
    }
    ?>
</body>
</html>