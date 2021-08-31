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
        <h1>Estados e Regiões Brasileiras</h1>
    </header>
    <section>
        <div>
            <?php
                $est = isset($_GET["est"]) ? $_GET["est"] : "Brasil";
                switch ($est) {
                  case 1: 
                  case 3:
                  case 4:
                  case 14:
                  case 22:
                  case 23:
                  case 27:
                    echo"Você mora na Região Norte";
                    break;
                  case 10: 
                  case 18:
                  case 6:
                  case 20:
                  case 15:
                  case 17:
                  case 2:
                  case 26:
                  case 5:
                    echo"Você mora na Região Nordeste";
                    break;
                  case 7:
                  case 9:
                  case 11:
                  case 12:
                    echo"Você mora na Região Centro-Oeste";
                    break;
                  case 8:
                  case 19:
                  case 13:
                  case 25:
                    echo"Você mora na Região Sudeste";
                    break;
                  case 24:
                  case 16:
                  case 21:
                    echo"Você mora na Região Sul";
                    break;
                }
            ?>
            <br>
            <a href="index3exercicio.html">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
