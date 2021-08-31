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
        <h1>Situação de Cidadão</h1>
    </header>
    <section>
        <div>
            <?php
                $ano = $_GET["ano"];
                $idade = 2021 - $ano;
                echo"Quem nasceu em $ano tem idade de $idade anos";
                $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "FACULTATIVO";
                echo"<br/>Quem tem $idade anos de idade, o voto  é $tipo";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
