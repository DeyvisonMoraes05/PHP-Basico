<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura Condicional Switch</title>
    </head>
    <body>
        <h1>Calculador de Quadrado, Cubo e Raíz Quadrada</h1>
    </header>
    <section>
        <div>
            <?php
                $n = isset($_GET["num"]) ? $_GET["num"] : 0;
                $o = isset($_GET["op"]) ? $_GET["op"] : 1;
                switch ($o) {
                  case 1:
                    $r = $n * 2;
                    break;
                  case 2:
                    $r = $n ^ 3;
                    break;
                  case 3:
                    $r = sqrt($n); // $n ^ (1/2) ou $n ^ (0.5); 
                    break; // opcional
                }
                echo"O resultado da operação solicitada foi $r";
            ?>
            <a href="index1exercicio.html">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
