<?php 

include '../conexao/conn.php';

$cpf_avisado = $_POST['cpf'];
$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];
$data = date('Y/m/d');
$hora = date('H:i:s');

echo $titulo;
echo '<br>';
echo $corpo;
echo '<br>';
echo $data;
echo '<br>';
echo $hora;

$sql = "INSERT INTO avisos (cpf_avisado, titulo, corpo, data_envio, hora_envio) VALUES('$cpf_avisado', '$titulo','$corpo','$data','$hora')";
$result = mysqli_query($conn, $sql);

//atualiza quantidade de notificações toda vez que enviar um aviso
include 'check_aviso.php';

header('Location: ../pages/lista_equipes.php');