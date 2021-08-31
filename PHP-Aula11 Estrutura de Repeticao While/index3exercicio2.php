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
        <h1>Criando Formulários Dinâmicamente</h1>
    </header>
    <section>
        <div>
            <?php
                $i = 1;
                while($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                }
                $i = 1;
                while($i <= 5) {
                    $v = "num".$i;
                    echo "Valor $i : ".$$v. "<br>";
                    $i++;
                }
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
