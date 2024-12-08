<?php
//PROCESSAMENTO DA EXCLUSÃO DE REGISTROS NA TABELA AVISOS

include "../conexao/conn.php";

//variáveis capturadas do botão de exclusão em LIST_EQUIPE.PHP
$id = $_GET['id'];


$sql = 'DELETE FROM avisos WHERE id = '.$id.';';
mysqli_query($conn, $sql);

//atualiza quantidade de notificações toda vez que apagar um aviso
include 'check_aviso.php';

header('Location: ../pages/lista_avisos.php');