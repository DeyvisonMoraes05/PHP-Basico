<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Integração HTML5 e PHP</title>
    </head>
    <body>
        <h1>Calculador de Raíz Quadrada</h1>
    </header>
    <section>
        <div>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "<h1>A raíz quadrada de $valor é igual a </h1>" . number_format($rq,2);
            ?>
            <br>
            <a href="index01exercicio.html">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
