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
        <h1>Função UCWORDS</h1>
    </header>
    <section>
        <div>
            <?php
                $nome = "deyvison moraes";
                print("Seu nome é " .ucwords($nome));
                $nome2 = "Deyvison Moraes";
                $nome2 = ucwords($nome2);
                print("<br>Seu nome é $nome2");
                $nome3 = "Deyvison Moraes";
                $nome3 = ucwords(strtolower($nome3));
                print("<br>Seu nome é $nome3");
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
