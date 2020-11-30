<?php

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
if(empty($nome)){
    echo 'O nome não pode estar em branco';
    return;
}
if (strlen($nome) <=2){
    echo 'O nome deve conter mais que 2 caracteres';
    return;
}elseif(strlen($nome) >=40){
    echo 'Nome muito extenso';
    return;
}

//validação idade
if(empty($idade) and $idade <=0){
    echo 'Idade não pode ser vazia';
    return;
}
if(!is_numeric($idade)){
    echo 'Idade tem que ser um numero';
    return;
}


//var_dump($nome, $idade);

if ($idade >= 6 && $idade <=12){
    
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Infantil' )
        echo "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
    }
}elseif($idade >=13 && $idade <=17){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente' )
        echo "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
    }
}else {
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto' )
        echo "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
    }
}

?>