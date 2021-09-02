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
        <h1>Função IMPLODE</h1>
    </header>
    <section>
        <div>
            <?php
                $vetor[0] = "Curso";
                $vetor[1] = "básico";
                $vetor[2] = "de";
                $vetor[3] = "PHP";
                $texto = implode("#", $vetor);
                //$texto = join("#", $vetor);
                print($texto);
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
