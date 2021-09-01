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
        <h1>Funções internas que retornam parâmetros</h1>
    </header>
    <section>
        <div>
            <?php
                function soma() {
                    $param = func_get_args();
                    $total = func_num_args();
                    $s = 0;
                    for ($c = 0; $c < $total; $c++) {
                        $s += $param[$c];
                    }
                    return $s;
                }
        
                $resul = soma(3, 4, 5, 2, 7) ;
                print"A soma dos valores é $resul";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
