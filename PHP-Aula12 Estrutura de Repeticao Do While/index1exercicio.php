<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura de Repetição Do While</title>
    </head>
    <body>
        <h1>Contador progressivo e regressivo com Do While</h1>
    </header>
    <section>
        <div>
            <?php
                $c = 1;
                echo"Contador Progressivo com Do While<br/>";
                do {
                    echo $c. " ";
                    $c ++;
                } while($c <= 10);
        
                $c = 1;
                echo"<br/>Contador Progressivo com Do While<br/>";
                do {
                    echo "$c ";
                    $c += 2;
                } while($c <= 20);
        
                $c = 10;
                echo"<br/>Contador Regressivo com Do While<br/>";
                do {
                    echo $c. " ";
                    $c --;
                } while($c >= 1);
        
                $c = 20;
                echo"<br/>Contador Regressivo com Do While<br/>";
                do {
                    echo "$c ";
                    $c -= 2;
                } while($c >= 1);
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
