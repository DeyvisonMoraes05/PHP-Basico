<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Operadores Relacionais</title>
    </head>
    <body>
        <h1>Operação conforme o tipo escolhido</h1>
    </header>
    <section>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"];
                echo"Os valores passados foram $n1 e $n2 <br/>";
                $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
                echo"O resultado é $r";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
