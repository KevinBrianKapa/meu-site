<!DOCTYPE html>
<html>
<head>
    <title>Análise de Números</title>
</head>
<body>
    <form method="POST" action="">
        <?php
        // Verificar se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Processar os números
            $numeros = array();
            for ($i = 1; $i <= 15; $i++) {
                $numero = $_POST["numero$i"];
                $numeros[] = (int)$numero;
            }

            // Vetor para armazenar os números pares
            $pares = array();

            // Vetor para armazenar os números ímpares
            $impares = array();

            // Separar os números pares e ímpares
            foreach ($numeros as $numero) {
                if ($numero % 2 == 0) {
                    $pares[] = $numero;
                } else {
                    $impares[] = $numero;
                }
            }

            // Imprimir os números pares
            echo "<p>Números pares: ";
            foreach ($pares as $par) {
                echo $par . " (par) ";
            }
            echo "</p>";

            // Imprimir os números ímpares
            echo "<p>Números ímpares: ";
            foreach ($impares as $impar) {
                echo $impar . " (ímpar) ";
            }
            echo "</p>";
        }
        ?>

        <h2>Insira 15 números:</h2>
        <?php
        // Gerar campos de entrada para os números
        for ($i = 1; $i <= 15; $i++) {
            echo "<input type='number' name='numero$i' placeholder='Número $i' required/><br/>";
        }
        ?>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>