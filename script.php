<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); informa ordem e variedade da variável

$nome = $_POST['nome'];
$idade =$_POST['idade'];
//var_dump($nome); mostra quantos caracteres
//var_dump($idade); mostra o tipo de variável

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente'
    header(string "location:index.php");
    return;
}

else if(strlen($nome) < 2)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 2 caracteres, por favor preencha-o novamente'
    header(string "location:index.php");
    return;

}
else if(strlen($nome) > 30)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 30 caracteres, por favor preencha-o novamente'
    header(string "location:index.php");
    return;

}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe número para a idade, por favor preencha-o novamente'
    header(string "location:index.php");
    return;
}



if($idade >= 6 && $idade <= 12)
{
    //echo 'Infantil';
    for($i=0; $i<=count($categorias); i++)
    {
        if ($categorias[i] == 'infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria".$categorias[i];
            header(string "location:index.php");
        }
    }
} else if ($idade >= 13 && $idade <=18)
{
    //echo 'Adolescente';
    for($i=0; $i<=count($categorias); i++)
    {
        if ($categorias[i] == 'adolescente'){
            echo "O nadador ".$nome." compete na categoria".$categorias[i];
        }
    }
} else if {
    //echo 'Adulto';
    for($i=0; $i<=count($categorias); i++)
    {
        if ($categorias[i] == 'adulto'){
            echo "O nadador ".$nome." compete na categoria".$categorias[i];
        }
    }
}
 else {
    //echo 'Idoso';
    for($i=0; $i<=count($categorias); i++)
    {
        if ($categorias[i] == 'idoso'){
            echo "O nadador ".$nome." compete na categoria" .$categorias[i];
        }
    }
}


?>