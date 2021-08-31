<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Operadores Relacionais</title>
    </head>
    <body>
        <h1>Comparação de variáveis</h1>
    </header>
    <section>
        <div>
            <?php
                $a = 3;
                $b = "3";
                $r = ($a == $b) ? "SIM" : "NÂO"; 
                echo"As variáveis A e B são iguais ? $r";
                $r = $a === $b ? "SIM" : "NÃO";
                echo"<br/>As variáveis A e B são idênticas ? $r";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
