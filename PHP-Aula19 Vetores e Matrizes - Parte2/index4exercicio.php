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
                    sort($v);// colocando em ordem
                    print_r($v);
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    rsort($v);// colocando em ordem reversa
                    print_r($v);
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    asort($v);// ordem associativa
                    print_r($v);
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    arsort($v);// ordem associativa reversa
                    print_r($v);
                    $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                    print_r($v);
                    ksort($v);// ordem por chave(indice)
                    print_r($v);
                    $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                    print_r($v);
                    krsort($v);// ordem por chave reversa(indice)
                    print_r($v);

                    $a=10;
                    $b=2;
                    $j= $a/2;
                    for ($i=0; $i < $j; $i++){
                        if ($i % $b == 1) 
                        echo "$i";
                    }
                ?>
            </pre>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
