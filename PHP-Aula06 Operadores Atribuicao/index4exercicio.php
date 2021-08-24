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
        <h1>Variáveis Variáveis</h1>
    </header>
    <section>
        <div>
            <?php
                $site = "cursoonline";
                $$site = "cursoPHPbásico";
                echo "$site";
                echo "<br/>$cursoonline";
                echo "<br/>";
                $x = "abc";
                $$x = "def";
                echo "<br/>O conteúdo da variável X é $x";
                echo "<br/>A variável ABC criada recebeu o valor $abc";
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
