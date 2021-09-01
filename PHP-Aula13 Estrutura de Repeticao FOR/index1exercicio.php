<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrututa de Repetição FOR</title>
    </head>
    <body>
        <h1>Contador progressivo e regressivo com FOR</h1>
    </header>
    <section>
        <div>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo $i. " ";
                }
                echo"<br/>";
                for ($i = 10; $i >= 1; $i--) {
                    echo"$i ";
                }
                echo"<br/>";
                for ($i = 0; $i <= 50; $i += 5) {
                    print $i. " ";
                }
                echo"<br/>";
                for ($i = 20; $i >= 0; $i -= 2) {
                    print"$i ";
                }
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
