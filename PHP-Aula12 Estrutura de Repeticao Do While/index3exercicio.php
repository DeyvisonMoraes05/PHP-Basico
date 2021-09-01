<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrutura de Repetição Do While</title>
    </head>
    <body>
        <h1>Tabuadas com Do While</h1>
    </header>
    <section>
        <div>
            <form method="get" action="index3exercicio2.php">
                Número:
            <select name="num">
            <?php
                for($c = 1; $c <= 10; $c++) {
                    echo"<option>$c</option>";
                }
            ?>
            </select>
            <input type="submit" value="Tabuada"/>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
