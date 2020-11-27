<?php

//array
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = "Diego";
$idade = 25;

//var_dump($nome, $idade);

if ($idade >= 6 && $idade <=12){
    
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'Infantil' )
        echo "O nadador " .$nome . " compete na categoria: " .$categorias[$i];
    }


}elseif($idade >=13 && $idade <=18){
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