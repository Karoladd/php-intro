<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport">
</head>

<body>

<p></p>
<form action ="script.php" method="post">
    <?php
        $mensagemDeErro = isset($_SESSION['mensagem-de-erro'])? $_SESSION['mensagem-de-erro']: '':
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>

    <p>Seu nome: <input type="text" name="nome"/></p>
    <p>Sua idade: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>
    
</body>
</html>