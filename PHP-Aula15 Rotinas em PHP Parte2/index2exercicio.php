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
        <h1>Usando funções de outros arquivos</h1>
    </header>
    <section>
        <div>
            <?php
                include_once "indexfuncoes.php";
                echo "<h1>Testando Novas Funções</h1>";
                mensagem();
                mostraValor(7);
                echo "<h4>Finalizando Programa...</h4>";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
