<?php 

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3) 
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter menos de 40 caracteres';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade';
    header('location: index.php');
    return;
}
 
/*
 * REGRAS DE NEGOCIO -------------------------------------- 
 */

if($idade >= 6 && $idade <= 12) 
{
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'infantil') 
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
            
    }
} 
else if($idade >= 13 && $idade <= 18) 
{
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
            
    }
} 
else if($idade >= 19 && $idade <= 65)
{
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
else if($idade >= 66 && $idade <= 80)
{
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'idoso')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} 
else 
{
    echo "Desculpe nadador ".$nome. " você não pode competir";
}

?>