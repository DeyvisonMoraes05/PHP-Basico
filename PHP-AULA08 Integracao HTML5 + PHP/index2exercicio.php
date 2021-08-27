<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Integração HTML5 e PHP</title>
    </head>
    <body>
        <h1>Formulário Simples</h1>
    </header>
    <section>
        <div>
            <?php
                //$nome = $_GET["nome"];
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]" ;
                //$ano = $_GET["ano"];
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                //$sexo = $_GET["sexo"];
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem Sexo]";
                $idade = date("Y") - $ano;
                echo"$nome é $sexo e tem $idade anos de idade.";
            ?>
            <br>
            <a href="index02exercicio.html">Voltar</a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
