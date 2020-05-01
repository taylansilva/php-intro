<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        
        if($idade >= 6 && $idade <= 12) 
        {
            for($i = 0; $i <= count($categorias); $i++) 
            {
                if($categorias[$i] == 'infantil') 
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " . $categorias[$i]);
                    return null;
                }
                    
            }
        } 
        else if($idade >= 13 && $idade <= 18) 
        {
            for($i = 0; $i <= count($categorias); $i++) 
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " . $categorias[$i]);
                    return null;
                }
                    
            }
        } 
        else if($idade >= 19 && $idade <= 65)
        {
            for($i = 0; $i <= count($categorias); $i++) 
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 66 && $idade <= 80)
        {
            for($i = 0; $i <= count($categorias); $i++) 
            {
                if($categorias[$i] == 'idoso')
                {
                    setarMensagemSucesso("O nadador ".$nome. " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } 
        else 
        {
            echo "Desculpe nadador ".$nome. " você não pode competir";
        }
    } 
    else 
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }

    
}