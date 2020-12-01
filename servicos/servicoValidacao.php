<?php

//validação nome
function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode estar vazio');
        return false;
    }
    else if (strlen($nome) <=2)
    {
        setarMensagemErro('O nome deve conter mais que 2 caracteres');
        return false;
    }elseif(strlen($nome) >=40)
    {
        setarMensagemErro('Nome muito extenso');
    return false;
    }
    return true;
}
//validacao idade
function validaIdade(string $idade) : bool
{
    if(empty($idade) and $idade <=0)
    {
        setarMensagemErro('Idade nao pode ser vazia ou 0');
        return false;
    }
    else if(!is_numeric($idade))
    {
        setarMensagemErro('Idade tem que ser um numero');
    return false;
    }
    return true;
}

?>

