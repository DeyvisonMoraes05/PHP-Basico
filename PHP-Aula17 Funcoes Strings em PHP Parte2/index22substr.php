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
        <h1>Função SUBSTR</h1>
    </header>
    <section>
        <div>
            <?php
                $site = "Curso em Vídeo";
                $sub = substr($site, 0,5);
                echo "$sub";
                $site1 = "Curso em Vídeo";
                $sub1 = substr($site1,6);
                echo "<br>$sub1";
                $site2 = "Curso em Vídeo";
                $sub2 = substr($site2,-5);
                echo "<br>$sub2";
                $site3 = "Curso em Vídeo";
                $sub3 = substr($site3,-5,2);
                echo "<br>$sub3";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
