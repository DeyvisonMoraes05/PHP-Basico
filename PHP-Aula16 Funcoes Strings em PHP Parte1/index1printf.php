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
        <h1>Função PRINTF</h1>
    </header>
    <section>
        <div>
            <?php
                $p = "Leite";
                $pr = 4.5;
                //echo "O $p custa R$ $pr";
                printf("O %s custa R$ %.2f", $p, $pr);
                
                $p1 = "Leite";
                $pr1 = 4.5;
                echo "<br>O $p custa R$ " .number_format($pr1,2);
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
