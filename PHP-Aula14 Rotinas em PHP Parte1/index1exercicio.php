<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Rotinas Parte 1</title>
    </head>
    <body>
        <h1>Função sem retorno</h1>
    </header>
    <section>
        <div>
            <?php
                function soma($a, $b) {
                    $s = $a + $b;
                    echo"<p>A soma vale $s</p>"; 
                }

                soma(3,4);
                soma(2,6);
                $i = 5;
                $j = 1;
                soma($i, $j);
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
