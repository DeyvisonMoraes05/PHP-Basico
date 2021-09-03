<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Vetores e Matrizes Parte1</title>
    </head>
    <body>
        <h1>Manipulação de Matrizes</h1>
    </header>
    <section>
        <div>
            <pre>
                <?php
                    $m = array ( array(6,4),
                                 array(4,9),
                                 array(3,2));
                    $m[0][1] = $m[2][0];
                    print_r($m);
                ?>
            </pre>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
