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
        <h1>Operadores Aritméticos Básicos</h1>
    </header>
    <section>
        <div>
            <?php
                $n1 = $_GET["a"];  
                $n2 = $_GET["b"];
                echo "<h2>Valores recebidos: $n1 e $n2</h2>";
                $media = ($n1 + $n2) / 2;
                echo "A soma vale ". ($n1 + $n2);
                echo "<br/>A subtração vale ". ($n1 - $n2);
                echo "<br/>A multiplicação vale ". ($n1 * $n2);
                echo "<br/>A divisão vale ". ($n1 / $n2);
                echo "<br/>O modulo vale ". ($n1 % $n2);
                echo "<br/>A média vale ". ($media);  
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
