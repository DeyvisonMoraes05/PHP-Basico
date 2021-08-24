<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Operadores de Atribuição</title>
    </head>
    <body>
        <h1>Incrementos e Decrementos</h1>
    </header>
    <section>
        <div>
            <?php
                /* Esse erxercício pretende demonstrar 
            o uso de operadores de 
            incremento e decremento*/ 
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é ". --$atual; // PRÉ DECREMENTO
            echo "<br/>O ano atual é $atual e o ano anterior é ". $atual--; // PÓS DECREMENTO
            echo "<br/>O ano atual é $atual e o ano posterior é ". ++$atual; // PRÉ INCREMENTO
            echo "<br/>O ano atual é $atual e o ano posterior é ". $atual++; // PÓS INCREMENTO
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
