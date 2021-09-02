<!DOCTYPE html>
 
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/favcon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Funções Strings em PHP Parte2</title>
    </head>
    <body>
        <h1>Função STR_PAD</h1>
    </header>
    <section>
        <div>
            <?php
                $nome = "Rebeca";
                $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
                print("Minha professora $novo é linda!");
                /*podem ser {
                    str_pad_right
                    str_pad_center
                    str_pad_left
                }*/
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
