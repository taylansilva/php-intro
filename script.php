<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome']; //escrever como está no name do input
$idade = $_POST['idade']; //verificar a tag method do input


/*
 * VALIDAÇÃO DO NOME -------------------------------------- 
 */

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3) 
{
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome deve conter menos de 40 caracteres';
    return;
}

/*
 * VALIDAÇÃO DA IDADE -------------------------------------- 
 */

if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
    return;
}
 
/*
 * REGRAS DE NEGOCIO -------------------------------------- 
 */

if($idade >= 6 && $idade <= 12 ) 
{
    for($i = 0; $i < count($categorias); $i++) 
    {
        if($categorias[$i] == 'infantil') 
            echo "O nadador ".$nome. " compete na categoria " . $categorias[$i];
    }
} 
else if($idade >= 13 && $idade <= 18) 
{
    for($i = 0; $i < count($categorias); $i++) 
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome. " compete na categoria " . $categorias[$i];
    }
} 
else if($idade >= 19 && $idade <= 65)
{
    for($i = 0; $i < count($categorias); $i++) 
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria " . $categorias[$i];
    }
}
else if($idade >= 66 && $idade <= 80)
{
    for($i = 0; $i < count($categorias); $i++) 
    {
        if($categorias[$i] == 'idoso')
            echo "O nadador ".$nome. " compete na categoria " . $categorias[$i];
    }
} else 
{
    echo "Desculpe nadador ".$nome. " você não pode competir";
}

?>