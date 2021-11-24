<?php

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
    echo 'O campo não pode ser vazio';
    return;

}

if(strlen($nome) < 2)
{
    echo 'O nome deve conter mais de 2 caracteres';
    return;

}
if(strlen($nome) > 30)
{
    echo 'O nome é muito extenso';
    return;

}
if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}



if($idade >= 6 && $idade <= 12)
{
    //echo 'Infantil';
    for($i=0; $i<=count($categorias); i++)
    {
        if ($categorias[i] == 'infantil'){
            echo "O nadador ".$nome." compete na categoria".$categorias[i];
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