<?php

include '../conexao/conn.php';

session_start();

//guarda o nome do usuario
$nome_logado =  $_SESSION['log'];

//busca cpf a partir do nome do usuario
$sql1 = "SELECT cpf FROM equipe WHERE nome = '$nome_logado';";
$res1 = mysqli_query($conn, $sql1);
$cpf_logado = mysqli_fetch_assoc($res1);

//busca avisos vistos a partir do cpf do usuario
$sql = "SELECT visto FROM avisos WHERE cpf_avisado = ".$cpf_logado['cpf'].";";
$res = mysqli_query($conn, $sql);

//variavel que guardará a quantidade de notificações
$notificacoes = 0;

for($i = 0; $i < mysqli_num_rows($res); $i++ ){
    $row = mysqli_fetch_assoc($res);
    if($row['visto'] == NULL){
        $notificacoes++;
    }
}

//guarda quantidade de notificações numa global
$_SESSION['notificacoes'] =  $notificacoes;