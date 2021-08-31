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
        <h1>Verificador de situação de alunos</h1>
    </header>
    <section>
        <div>
            <?php
                $N1 = isset($_GET["N1"]) ? $_GET["N1"] : 0;
                $N2 = isset($_GET["N2"]) ? $_GET["N2"] : 0;
                $media = ($N1 + $N2) / 2;
                if($media < 5) {
                    $situacao = "REPROVADO";
                }
                elseif ($media >= 5 && $media <= 7) {
                    $situacao = "RECUPERAÇÃO";
                }
                else {
                    $situacao = "APROVADO";
                }
                echo"<span class='foco'>A média entre $N1 e $N2 é igual a $media</span>";
                echo"<span class='foco'><br/>Situação do Aluno: $situacao</span>";
            ?>
            <a href="index3exercicio.html">
                <br>
                Voltar
            </a>
        </div>
    </section>
    <footer>
        <p>&copy; DEV_DeyvisonMoraes</p>
    </footer>
    </body>
</html>
