<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Funções Strings em PHP Partes</title>
    </head>
    <body>
        <h1>Função STRPOS</h1>
    </header>
    <section>
        <div>
            <?php
                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase, "PHP");
                echo "$frase <br> A string foi encontrada na posição $pos";
                $frase1 = "Estou aprendendo PHP";
                $pos1 = strpos($frase1, "php");
                echo "<br>$frase1 <br/> A string foi encontrada na posição $pos1";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
