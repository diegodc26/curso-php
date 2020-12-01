<?php
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF -8>">
    <title>Formulário de inscrição</title>
    <meta name="author" content="Diego">
    <meta name="description" content="form php">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <p>FORMULÁRIO PARA inscrição DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = obterMensagemSucesso();
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados" /></p>
    </form>
</body>

</html>