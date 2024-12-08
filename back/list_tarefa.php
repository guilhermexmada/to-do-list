<?php 
//VISUALIZAÇÃO DAS TAREFAS 

include "../conexao/conn.php";

//variável capturada da URL na página LISTA_TAREFAS
//para cada comando SQL passado, uma mensagem é exibida no topo da lista
switch ($ord){
  case 'ORDER BY prioridade DESC':
      echo  '<h1>Maior prioridade</h1>';
      break;
  case 'ORDER BY prioridade ASC':
      echo  '<h1>Menor prioridade</h1>';
      break;
  case 'ORDER BY id DESC':
      echo  '<h1>Mais recente</h1>';
      break;
  case 'ORDER BY id ASC':
       echo  '<h1>Menos recente</h1>';
      break;
  case 'WHERE status_tarefa = 0':
      echo  '<h1>Não iniciado</h1>';
      break;
  case 'WHERE status_tarefa = 1':
      echo  '<h1>Em andamento</h1>';
      break;
  case 'WHERE status_tarefa = 2':
      echo  '<h1>Finalizado</h1>';
      break;
  default:
      echo  'Maior prioridade';
      break;
}

//execução da consulta das tarefas e exibição
$sql = "SELECT * FROM tarefas ".$ord."";
$result = mysqli_query($conn,$sql);
while($rows = mysqli_fetch_assoc($result)){
 //para cada tipo de status, uma cor de fundo e uma mensagem de botão é definida
 if($rows['status_tarefa']==0){
    $bgColor = '#fff7ed';
    $btnName = 'não iniciou';
 }
 else if($rows['status_tarefa']==1){
    $bgColor = '#f97316';
    $btnName = 'em andamento';
 }
 else if($rows['status_tarefa']==2){
   $bgColor = '#ef4444';
   $btnName = 'finalizado';
};

//consulta secundária que busca o nome do funcionário vinculado à tarefa na tabela equipe
//cpf_encarregado é a chave estrangeira na tabela tarefas
$cpf_encarregado = $rows['cpf_encarregado'];
$sql2 = "SELECT nome FROM equipe WHERE cpf = '$cpf_encarregado' ; ";
$result2 = mysqli_query($conn,$sql2);
$rows2 = mysqli_fetch_assoc($result2);

echo "
<div class='task' id='".$rows['id']."' style='background-color: ".$bgColor." '>
    <h2 class='task-title'>".$rows['nome_tarefa']."</h2>
    <p><strong>Encarregado</strong> : ".$rows2['nome']."</p>
    <p class='task-desc'><em>".($rows['descricao_tarefa'])."</em></p>
    <p><strong>Início</strong>: ".$rows['data_inicial']." às ".$rows['hora_inicial']."</p>
    <p><strong>Prazo final</strong>: ".$rows['data_final']." às ".$rows['hora_final']."</p>
    ";
    //se não estiver logado, não tem acesso ao botão de atuaizar status
    //apenas administradores têm acesso ao botão de excluir 
    if($_SESSION['acess'] !== 'zero'){
      echo "<button class='btn-check' onclick=\"window.location.href='../back/check_tarefa.php?id=" . $rows['id'] . "&stat=".$rows['status_tarefa']."&order=".$ord."';\">".$btnName."</button>";
  }
    if($_SESSION['acess'] == 'admin'){
        echo "<button class='btn-delete' onclick=\"window.location.href='../back/excluir_tarefa.php?id=" . $rows['id'] . "';\">Excluir</button>";
    }
echo "</div>";
}



?>