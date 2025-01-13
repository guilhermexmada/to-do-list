<?php

include '../conexao/conn.php';

if(isset($_SESSION['criterio'])){
    $condicao = $_SESSION['criterio'];
} else {
    $condicao = "tarefas";
}

if ($condicao == 'tarefas') {
    $sql = "SELECT cpf_encarregado,nome_tarefa,status_tarefa FROM tarefas;";
    $result = mysqli_query($conn, $sql);

    $nao_iniciado = 0;
    $em_andamento = 0;
    $finalizado = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        //print_r($row);
        //$sql2 = "SELECT nome FROM funcionarios WHERE cpf = " . $row['cpf_encarregado'] . ";";
        //$nome = mysqli_query($conn, $sql);

        if ($row['status_tarefa'] == 0 || null) {
            $nao_iniciado++;
           
        } else if ($row['status_tarefa'] == 1) {
            $em_andamento++;
         
        } else if ($row['status_tarefa'] == 2) {
            $finalizado++;
            
        }
    }

    $total_tarefas = $nao_iniciado + $em_andamento + $finalizado;
    $per_nao_iniciado = ($nao_iniciado*100) / $total_tarefas;
    $per_em_andamento = ($em_andamento*100) / $total_tarefas;
    $per_finalizado = ($finalizado*100) / $total_tarefas;

    echo "
    <div class='barra' style='width:".$per_nao_iniciado."%; background-color: white;'><br> ".$nao_iniciado."</div>
    <div class='barra' style='width:".$per_em_andamento."%; background-color: #f97316;'><br>".$em_andamento."</div>
    <div class='barra' style='width:".$per_finalizado."%; background-color: #ef4444;'><br>".$finalizado."</div>
    ";
    $descricao_grafico = "Análise de tarefas";
    ;
}
