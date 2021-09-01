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
        <h1>Verificador de números primos</h1>
    </header>
    <section>
        <div>
            <?php
                $n = isset($_GET["n"]) ? $_GET["n"] : 1;
                print"Analisando o número $n...";
                print"<br/>Valores múltiplos: ";
                $multiplos = 0;
                for ($c = 1; $c <= $n; $c++) {
                    if ($n % $c == 0) {
                        $multiplos ++;
                        print $c. " ";
                    }
                }
                print"<br/>Total de múltiplos: $multiplos";
                print"<br/>Resultado: ";
                if ($multiplos <= 2) {
                    print"Número $n é Primo";
                }else {
                    print"Número $n não é Primo";
                }
            ?>
            <br>
            <a href="index3exercicio.php">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
