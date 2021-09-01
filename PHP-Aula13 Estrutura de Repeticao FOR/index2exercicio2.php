<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrututa de Repetição FOR</title>
    </head>
    <body>
        <h1>Tabuadas com FOR</h1>
    </header>
    <section>
        <div>
            <?php
            $num = isset($_GET["num"]) ? $_GET["num"] : 1;
            for ($c = 1; $c <= 10; $c++) {
                $t = $num * $c;
                echo"$num x $c = $t <br/>";
            }
            ?>
            <br>
            <a href="javascript:history.go(-1)" >Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
