<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Funções Strings em PHP Parte1</title>
    </head>
    <body>
        <h1>Função ORD</h1>
    </header>
    <section>
        <div>
            <?php
                $letra = "C";
                $cod = ord($letra);
                print("A letra $letra MAIÚSCULO tem código $cod");
                $letra1 = "c";
                $cod1 = ord($letra1);
                print("<br>A letra $letra1 minúsculo tem código $cod1");
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
