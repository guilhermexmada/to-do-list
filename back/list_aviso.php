<?php
// VISUALIZAÇÃO DOS AVISOS DO USUÁRIO LOGADO
//INCLUSO NA PÁGINA LISTA_TAREFAS

include "../conexao/conn.php";

//guarda o nome do usuario
$nome_logado =  $_SESSION['log'];

//busca cpf a partir do nome do usuario
$sql1 = "SELECT cpf FROM equipe WHERE nome = '$nome_logado';";
$res1 = mysqli_query($conn, $sql1);
$cpf_logado = mysqli_fetch_assoc($res1);

//busca avisos no cpf do usuario e retorna uma lista
$sql = "SELECT * FROM avisos WHERE cpf_avisado = ".$cpf_logado['cpf']." ORDER BY id DESC;";
$res = mysqli_query($conn, $sql);
while($rows = mysqli_fetch_assoc($res)){
    echo "
        <div class='aviso'>
            <h2 class='task-title'>".$rows['titulo']."</h2>
            <p> <strong>".$rows['data_envio']."</strong> : ".$rows['hora_envio']." </p>
            <p>".$rows['corpo']."</p>
            <button class='listBtn' onclick=\"window.location.href='../back/excluir_aviso.php?id=".$rows['id']."';\">Marcar como lido</button>
        </div>
    ";
}