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
        <h1>Tabuadas com Do While</h1>
    </header>
    <section>
        <div>
            <?php
                $num = isset($_GET["num"]) ? $_GET["num"] : 0;
                echo "<h1>Tabuada de $num </h1>";
                for ($i = 1; $i <= 10; $i++) {
                  $t = $num * $i;
                  echo "$num x $i = $t <br>";
                }
            ?>
            <br/>
	        <a href="index3exercicio.php" >Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
