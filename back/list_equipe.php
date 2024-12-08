<?php 
// VISUALIZAÇÃO DOS FUNCIONÁRIOS NA TABELA EQUIPE
//INCLUSO NA PÁGINA LISTA_EQUIPES

include "../conexao/conn.php";

$sql = "SELECT * FROM equipe ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
while($rows = mysqli_fetch_assoc($result)){

 echo 
    "
     <div class='task' id='".$rows['id']."'>
         <h2 class='task-title'>".$rows['nome']."</h2>
         <p><strong>CPF</strong> : ".$rows['cpf']."</p>
         <p><strong>Função</strong>: ".$rows['funcao']."</p>
         <p><strong>Turno de atividade</strong>: ".$rows['turno']."</p>
         <button class='listBtn' onclick='abreAviso(".$rows['cpf'].")' >Enviar aviso</button>
         <button class='listBtn' onclick=\"window.location.href='../back/excluir_equipe.php?id=".$rows['id']."&cpf=".$rows['cpf']."';\">Retirar da equipe</button>
     </div>
 ";
}
    
//o botão de retirar da equipe envia ID e CPF para EXCLUIR_EQUIPE.PHP

?>