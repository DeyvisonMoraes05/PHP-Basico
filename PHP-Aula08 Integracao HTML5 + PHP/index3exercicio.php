<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Integração HTML5 e PHP</title> 
        <style>
            span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <h1>Gerador de Mensagem Peronalizada</h1>
    </header>
    <section>
        <div>
            <?php
                $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";  
                $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
                $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#0000ff";
            ?>
        </div>
        <div>
            <?php
                //echo $txt;
                echo"<span class='texto'>$txt</span>";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
