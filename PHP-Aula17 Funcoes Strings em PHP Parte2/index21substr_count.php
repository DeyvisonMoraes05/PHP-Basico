<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Funções Strings em PHP Parte2</title>
    </head>
    <body>
        <h1>Função  SUBSTR_COUNT</h1>
    </header>
    <section>
        <div>
            <?php
                $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
                $cont = substr_count($frase, "PHP");
                print("PHP encontrado $cont vezes");
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
