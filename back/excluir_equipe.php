<?php
//PROCESSAMENTO DA EXCLUSÃO DE FUNCIONÁRIO DA TABELA EQUIPE
//E DE SUAS RESPECTIVAS TAREFAS VINCULADAS

include "../conexao/conn.php";

//variáveis capturadas do botão de exclusão em LIST_EQUIPE.PHP
$id = $_GET['id'];
$cpf = $_GET['cpf'];

$sql = 'DELETE FROM equipe WHERE id = '.$id.';';
$sql2 = 'DELETE FROM tarefas WHERE cpf_encarregado = '.$cpf.'';

//a ordem de execução dos deletes deve ser : 
//primeiro na tarefa com chave estrangeira vinculada ao funcionário
//depois no funcionário na tabela equipe
$conn->query($sql2);
$conn->query($sql);


header('Location: ../pages/lista_equipes.php');