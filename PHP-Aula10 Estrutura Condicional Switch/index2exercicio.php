<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura Condicional Switch</title>
    </head>
    <body>
        <h1>Escolha de dias da semana</h1>
    </header>
    <section>
        <div>
            <?php
                $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
                switch ($d) {
                  case 2:
                  case 3:
                  case 4:
                  case 5:
                  case 6:
                    echo"Levanta e vai estudar, CABA SAFADO! :)";
                    break;
                  case 7:
                  case 1:
                    echo"Descanse, pequeno gafanhoto! ;)";
                    break;
                  default:
                    echo"Dia da semana inválido";
                }
            ?>
            <br>
            <a href="index2exercicio.html">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
