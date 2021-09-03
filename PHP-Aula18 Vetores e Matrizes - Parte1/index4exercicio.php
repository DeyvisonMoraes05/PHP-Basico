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
        <h1>Manipulação de Array(Vetores)</h1>
    </header>
    <section>
        <div>
            <pre>
                <?php
                    $v = array( 0=>5,
                                1=>9,
                                2=>8,
                                3=>7);
                    $v[] = "D";
                    print_r($v); 
                    echo "<br>";
                    $v = array( 3=>5,
                                1=>9,
                                0=>8,
                                7=>7);
                    unset($v[0]);
                    print_r($v);
                ?>
            </pre>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
