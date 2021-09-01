<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura de Repetição Do While</title>
    </head>
    <body>
        <h1>Fatorial com Do While</h1>
    </header>
    <section>
        <div>
            <?php
                $v = isset($_GET["valor"]) ? $_GET["valor"] : 2;
                echo"<h1>Calculando o Fatorial de $v </h1>";
                $c = $v;
                $f = 1;
                do {
                    //echo $c." x ";
                    $f = $f * $c;
                    $c --;
                } while ($c >= 1);
                echo"<h2>$v! = $f</h2>";
            ?>
            <p>
                <a href="index2exercicio.html">Voltar</a>
            </p>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
