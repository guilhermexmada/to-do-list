<?php 
//PROCESSAMENTO DA EXCLUSÃO DE TAREFAS

include "../conexao/conn.php";

$id = $_GET['id'];
$sql = 'DELETE FROM tarefas WHERE id = '.$id.';';
$conn->query($sql);
header('Location: ../pages/lista_tarefas.php');
?>