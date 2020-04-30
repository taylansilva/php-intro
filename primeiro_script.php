<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Taylan';
$idade = 23;
//var_dump($nome, $idade);

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