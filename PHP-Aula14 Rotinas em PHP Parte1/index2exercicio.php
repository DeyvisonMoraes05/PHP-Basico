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
        <h1>Função com retorno</h1>
    </header>
    <section>
        <div>
            <?php
                function soma($i, $j) {
                    //$s = $a + $b;
                    //return $s;
                    return $i + $j;
                }
        
                $i = 4;
                $j = 3;
                $r = soma($i, $j);
                print"A soma entre $i e $j é = $r";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
