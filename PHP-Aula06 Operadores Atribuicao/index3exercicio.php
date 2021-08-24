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
        <h1>Passagem de Parâmetro por Atribuição e Referenciação</h1>
    </header>
    <section>
        <div>
            <?php
                $a = 3;
                $b = $a;
                $b += 5;
                echo "<br/>Atribuição";
                echo "<br/>A variável A vale $a";
                echo "<br/>A variável B vale $b";
                echo "<br/>";
                echo "<br/>Referenciação";
                $a1 = 3;
                $b1 = &$a1;
                $b1 += 5;
                echo "<br/>A variável A vale $a1";
                echo "<br/>A variável B vale $b1";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
