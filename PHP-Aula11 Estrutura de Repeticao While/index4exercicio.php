<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura de Repetição While</title>
    </head>
    <body>
        <h1>Contador progressivo e regressivo dinâmico</h1>
    </header>
    <section>
        <div>
            <?php
                $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
                $fim = isset($_GET["fim"]) ? $_GET["fim"] : 0;
                $inc = isset($_GET["inc"]) ? $_GET["inc"] : 0;
                if ($inicio < $fim){
                    for ($i = $inicio; $i <= $fim; $i += $inc) {
                        echo " $i";
                    }
                } else {
                    for ($i = $inicio; $i >= $fim; $i -= $inc){
                        echo " $i";
                    }
                }
            ?>
            <a href="index4exercicio.html"><br>Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
