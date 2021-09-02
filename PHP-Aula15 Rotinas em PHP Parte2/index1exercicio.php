<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Rotinas Parte 2</title>
    </head>
    <body>
        <h1>Rotinas com passagens de parâmetros por valor e referência</h1>
    </header>
    <section>
        <div>
            <?php
                print"<h1>Passagem por Valor</h1>";
                function teste1($d) {
                    $d += 2;
                    echo"<p>O valor de D é $d</p>"; 
                }
            
                $a = 3;
                teste1($a);
                echo"<p> O valor de A é $a</p>";
                print"<h1>Passagem por Referência</h1>";

                function teste2(&$d) {
                    $d += 2;
                    echo"<p>O valor de D é $d</p>"; 
                }
            
                $a = 3;
                teste2($a);
                echo"<p> O valor de A é $a</p>";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
