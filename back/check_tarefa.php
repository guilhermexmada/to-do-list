<?php
//PROCESSAMENTO DA ATUALIZAÇÃO DO STATUS DA TAREFA

include '../conexao/conn.php';

$id = $_GET['id'];
$status = $_GET['stat'];

//variável filtro capturada para manter o filtro quando a página de retorno for carregada
$order = $_GET['order'];

// 0 = não iniciado ; 1 = em andamento ; 2 = finalizado
switch($status){
    case 0: 
        $novoStatus = 1;
        break;
    case 1:
        $novoStatus = 2;
        break;
    case 2:
        $novoStatus = 0;
        break;
}

$sql = 'UPDATE tarefas SET status_tarefa = '.$novoStatus.' where id = '.$id.'';
$conn->query($sql);

header('Location: ../pages/lista_tarefas.php?order='.$order.'');