<?php 

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome']; //escrever como está no name do input
$idade = $_POST['idade']; //verificar a tag method do input

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');