<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    }
    else if(strlen($nome) < 3) 
    {
        setarMensagemErro('O nome deve conter mais que 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome deve conter menos de 40 caracteres');
        return false;
    }

    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um numero para idade');
        return false;
    }

    return true;
}


