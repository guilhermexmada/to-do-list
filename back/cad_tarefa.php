<?php
//PROCESSAMENTO DO CADASTRO DE TAREFAS NA TABELA TAREFAS

include '../conexao/conn.php';

$nome = mysqli_real_escape_string($conn,$_POST['nome_tarefa']);
$prioridade = mysqli_real_escape_string($conn,$_POST['pri_tarefa']);
$descricao = mysqli_real_escape_string($conn,$_POST['desc_tarefa']);
$encarregado = mysqli_real_escape_string($conn,$_POST['encarregado']);
$inicio = mysqli_real_escape_string($conn,$_POST['datatempo_inicial']);
$final = mysqli_real_escape_string($conn,$_POST['datatempo_final']);

//separando data e horário dos campos datetime no formulário
$separador_inicial = explode('T',$inicio);
$data_inicio = $separador_inicial[0];
$hora_inicio = $separador_inicial[1];

$separador_final = explode('T', $final);
$data_final = $separador_final[0];
$hora_final = $separador_final[1];


//verificando se os campos obrigatórios foram preenchidos
if($nome !== '' || $prioridade !== '' || $descricao !== '' || $encarregado !== '' || $inicio !== '' || $final !== ''){
    $sql = "INSERT INTO tarefas (cpf_encarregado, prioridade, nome_tarefa, descricao_tarefa, data_inicial, hora_inicial, data_final, hora_final) 
values ('$encarregado' , '$prioridade' , '$nome' , '$descricao' , '$data_inicio' , '$hora_inicio' , '$data_final' , '$hora_final') ; ";
    $conn->query($sql);
    header('Location: ../pages/controle_tarefas.php');
}
else{
    header('Location: ../pages/controle_tarefas.php');
}
