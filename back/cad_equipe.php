<?php 
//PROCESSAMENTO DO CADASTRO DE FUNCIONÁRIOS NA TABELA EQUIPE

include "../conexao/conn.php";

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
$funcao = mysqli_real_escape_string($conn, $_POST['funcao']);
$turno = mysqli_real_escape_string($conn, $_POST['turno']);

//verificando se os campos obrigatórios foram preenchidos
if($nome !== '' && $cpf !== '' && $funcao !== '' && $turno !== ''){
$sql = "INSERT INTO equipe (nome, cpf, funcao, turno) VALUES  ('$nome' , '$cpf' , '$funcao' , '$turno') ";
$conn->query($sql);
header('Location: ../pages/equipes.php');
}
else{
    header('Location: ../pages/equipes.php');
}

