<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Estrututa de Repetição FOR</title>
    </head>
    <body>
        <h1>Tabuadas com FOR</h1>
    </header>
    <section>
        <div>
            <form method="get" action="index2exercicio2.php">    
            <select name="num" >
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        print"<option>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
