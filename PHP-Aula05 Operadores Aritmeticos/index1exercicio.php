<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Operadores Aritméticos</title>
    </head>
    <body>
        <h1>Funções Aritméticas</h1>
    </header>
    <section>
        <div>
            <?php
                $valor1 = $_GET["x"]; // passagem de parâmetros
                $valor2 = $_GET["y"];
                echo "<h2>Valores recebidos: $valor1 e $valor2</h2>";
                echo "O valor absoluto de $valor2 é ". abs($valor2);
                echo "<br/>O valor de $valor1<sup>$valor2</sup> é ". pow($valor1, $valor2);
                echo "<br/>A raíz quadrada de $valor1 é ". sqrt($valor1);
                echo "<br/>O valor de $valor2 arredondado aritméticamente é ". round($valor2);
                echo "<br/>O valor de $valor2 arredondado para cima é ". ceil($valor2);
                echo "<br/>O valor de $valor2 arredondado para baixo é ". floor($valor2);
                echo "<br/>A aprte inteira de $valor2 é ". intval($valor2);
                echo "<br/>O valor de $valor1 em moeda é R$". number_format($valor1, 2, ",", ".");
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
