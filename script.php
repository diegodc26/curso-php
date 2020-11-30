<?php

session_start();
//array
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//$categorias[] = 'idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//validação nome
if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio';
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}
else if (strlen($nome) <=2)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 2 caracteres';
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}elseif(strlen($nome) >=40)
{
    $_SESSION['mensagem-de-erro'] = 'Nome muito extenso';
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}

//validação idade
else if(empty($idade) and $idade <=0)
{
    $_SESSION['mensagem-de-erro'] = 'Idade nao pode ser vazia ou 0';
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Idade tem que ser um numero';
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}


//var_dump($nome, $idade);

if ($idade >= 6 && $idade <=12)
{
    
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Infantil' )
        $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
        header('location: http://localhost:8080/curso-php/index.php');
        return;
    }
}elseif($idade >=13 && $idade <=17)
{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente' )
        $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
        header('location: http://localhost:8080/curso-php/index.php');
        return;
    }
}else
{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto' )
        $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
        header('location: http://localhost:8080/curso-php/index.php');
        return;
    }
}
/*
else
{
    $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " não tem idade para competir ";
    header('location: http://localhost:8080/curso-php/index.php');
    return;
}
*/
?>