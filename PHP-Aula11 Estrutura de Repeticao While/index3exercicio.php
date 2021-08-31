<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura de Repetição While</title>
    </head>
    <body>
        <h1>Criando Formulários Dinâmicamente</h1>
    </header>
    <section>
        <div>
            <form method="get" action="index3exercicio2.php">
                <?php
                    $cont = 1;
                    while($cont <= 5){
                        echo "Valor $cont: <input type='number' name='v$cont' max='100' min='0' value='0'>
                        <br>";
                        $cont++;
                    }
                ?>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
