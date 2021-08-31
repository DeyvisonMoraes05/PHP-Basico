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
        <h1>Verificação Eleitoral</h1>
    </header>
    <section>
        <div>
            <?php
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
                $idade = date("Y") - $ano;
                echo"Você nasceu em $ano e tem $idade anos"; 
                /*if($idade < 16) {
                    $tipoVoto = "Não pode votar";
                }
                else {
                    if(($idade >= 16  && $idade < 18) || ($idade > 65)) {
                        $tipoVoto = "Voto é Opcional";
                    }
                    else {
                        $tipoVoto = "Voto é Obrigatório";
                    }
                }*/
                if ($idade < 16) {
                    $tipoVoto = "Não pode votar";
                }
                elseif (($idade >= 16  && $idade < 18) || ($idade > 65)) {
                        $tipoVoto = "Voto é Opcional";
                }
                else {
                    $tipoVoto = "Voto é Obrigatório";
                }
                echo"<br/>com essa idade $tipoVoto";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
