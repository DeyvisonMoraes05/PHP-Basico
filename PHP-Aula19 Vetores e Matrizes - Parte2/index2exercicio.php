<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Vetores e Matrizes Parte2</title>
    </head>
    <body>
        <h1>Manipulação de Array(Vetores)</h1>
    </header>
    <section>
        <div>
            <pre>
                <?php
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    $v[] = "O"; // inserindo no final
                    print_r($v,"<br/><br/>
                    <br/>");
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    array_push($v, "O");// inserindo no final
                    print_r($v);
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v,"<br/><br/>
                    <br/>");
                    array_pop($v);// excluindo no final
                    print_r($v);
                ?>
            </pre>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
