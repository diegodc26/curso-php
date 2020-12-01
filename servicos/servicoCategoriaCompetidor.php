<?php

function defineCategoriaCompetidor (string $nome, string $idade) : ?string
{
    //array
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    //valida nome e idade
    if (validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if ($idade >= 6 && $idade <=12)
        {
            
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'Infantil' )
                setarMensagemSucesso("O nadador " .$nome . " compete na categoria: " .$categorias[$i]);
                return null;
            }
        }elseif($idade >=13 && $idade <=17)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente' )
                setarMensagemSucesso("O nadador " .$nome . " compete na categoria: " .$categorias[$i]);
                return null;
            }
        }else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto' )
                {
                setarMensagemSucesso("O nadador " .$nome . " compete na categoria: " .$categorias[$i]);
                return null;
                }
            }
        }
    //se nao validade nome e idade mostra erro
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}