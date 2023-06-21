<!DOCTYPE html>
<html>
<head>
    <title>Imprimir números</title>
</head>
<body>
    <form method="POST" action="">
        <label for="valor">Digite um valor:</label>
        <input type="number" name="valor" id="valor" required />
        <button type="submit">Imprimir</button>
    </form>

    <?php
    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = $_POST['valor'];

        // Imprimir os números de 0 até o valor recebido
        echo "<p>";
        for ($i = 0; $i <= $valor; $i++) {
            echo $i . " ";
        }
        echo "</p>";
    }
    ?>
</body>
</html>