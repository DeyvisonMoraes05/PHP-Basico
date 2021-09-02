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
        <h1>Função TRIM</h1>
    </header>
    <section>
        <div>
            <?php
                $nome = "   Deyvison Thiago Gomes de Moraes   ";
                echo(strlen($nome));
                echo ": é o tamanho total da string<br>";
                $novo = trim($nome);
                echo($novo);
                echo ": é a string sem os espaços em branco<br>";
                echo(strlen($novo));
                echo ": é o tamanho string sem os espaços em branco desnecessários";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
