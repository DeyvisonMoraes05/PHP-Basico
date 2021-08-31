<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura Condicional IF</title>
    </head>
    <body>
        <h1>Verificador de idade</h1>
    </header>
    <section>
        <div>
            <?php
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
                $idade = date("Y") - $ano;
                echo"Você nasceu em $ano e tem $idade anos"; 
                if($idade >= 18) {
                    $voto = "já pode votar";
                    $dirige = "já pode dirigir";
                }
                else {
                    $voto = "não pode votar";
                    $dirige = "não pode dirigir";
                }
                echo"<br/> com essa idade você $voto e $dirige."
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
