<?php
//PROCESSAMENTO DA APLICAÇÃO DE FILTRO NA PÁGINA LISTA_TAREFAS

include '../conexao/conn.php';

//captura do valor da option no elemento <select>
$filtro = $_POST['filtro'];

//para cada opção, um comando SQL que será passado com método GET
switch ($filtro){
    case 'maior_pri':
        $order = 'ORDER BY prioridade DESC';
        break;
    case 'menor_pri':
        $order = 'ORDER BY prioridade ASC';
        break;
    case 'mais_rec':
        $order = 'ORDER BY id DESC';
        break;
    case 'menos_rec':
        $order = 'ORDER BY id ASC';
        break;
    case 'nao_inic':
        $order = 'WHERE status_tarefa = 0';
        break;
    case 'em_and':
        $order = 'WHERE status_tarefa = 1';
        break;
    case 'fin':
        $order = 'WHERE status_tarefa = 2';
        break;
    default:
        $order = 'ORDER BY prioridade DESC';
        break;
}

//variável será capturada antes da inclusão de LIST_TAREFA(back) 
//isso permite que que o select das tarefas possa usar o filtro  
header('Location: ../pages/lista_tarefas.php?order='.$order.'');