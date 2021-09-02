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
        <h1>Função WORDWRAP</h1>
    </header>
    <section>
        <div>
            <?php
                $t =  "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
                $r = wordwrap($t, 8, "<br/>\n");
                //$r = wordwrap($t, 5, "<br/>\n", false);
                //$r = wordwrap($t, 5, "<br/>\n", true);
                echo $r;
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
