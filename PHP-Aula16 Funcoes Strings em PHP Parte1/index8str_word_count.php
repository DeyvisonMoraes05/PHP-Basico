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
        <h1>Função  STR_WORD_COUNT</h1>
    </header>
    <section>
        <div>
            <?php
                $frase = "Eu vou estudar PHP agora";
                $cont = str_word_count($frase, 0);
                print($cont);
                echo "<br>";
                
                $frase1 = "Eu vou estudar PHP agora";
                $cont1 = str_word_count($frase1, 1);
                print_r($cont1);
                echo "<br>";

                echo "<br>";
                $frase2 = "Eu vou estudar PHP agora";
                $cont2 = str_word_count($frase2, 2);
                print_r($cont2);
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
