<!DOCTYPE html>
<html>
<head>
    <title>Valores Intermediários</title>
</head>
<body>
    <h2>Valores Intermediários</h2>
    <form method="POST" action="">
        <label for="primeiro_valor">Digite o primeiro valor:</label>
        <input type="number" name="primeiro_valor" id="primeiro_valor" required>
        <br>
        <label for="segundo_valor">Digite o segundo valor:</label>
        <input type="number" name="segundo_valor" id="segundo_valor" required>
        <br>
        <input type="submit" value="Imprimir">
    </form>

    <?php
    
//Esse codigo é bom salvar para codigos futuros

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $primeiroValor = $_POST["primeiro_valor"];
        $segundoValor = $_POST["segundo_valor"];

       
        $menorValor = min($primeiroValor, $segundoValor);
        $maiorValor = max($primeiroValor, $segundoValor);

        for ($i = $menorValor + 1; $i < $maiorValor; $i++) {
            echo "$i ";
        }
    }
    ?>
</body>
</html>