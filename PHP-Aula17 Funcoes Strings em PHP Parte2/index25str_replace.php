<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Funções Strings em PHP Parte2</title>
    </head>
    <body>
        <h1>Função STR_REPLACE</h1>
    </header>
    <section>
        <div>
            <?php
                $frase = "Gosto de estudar Matemática";
                $novafrase = str_replace("Matemática", "PHP", $frase);
                echo $novafrase;
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
