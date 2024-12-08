<!-- PÁGINA DE REGISTRO DE TAREFAS -->

<?php $ord = 'ORDER BY prioridade DESC'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../favicon-32x32.png" type="image/x-icon">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- CABEÇALHO -->
    <header>
        <h1>To Do List</h1>
        <nav>
        <?php 
        include '../back/header.php';
        
        ?>
        </nav>
    </header>
    
    <main>
        <!-- FORM DO FILTRO -->
        <section>
            <form action="../back/filtrar.php" method="post">
                <label class="formLabel">Filtrar por:</label>
                <select name="filtro" class="formInput">
                    <option selected></option>
                    <option value="maior_pri">Maior prioridade</option>
                    <option value="menor_pri">Menor prioridade</option>
                    <option value="mais_rec">Mais recente</option>
                    <option value="menos_rec">Menos recente</option>
                    <option value="nao_inic">Não iniciado</option>
                    <option value="em_and">Em andamento</option>
                    <option value="fin">Finalizado</option>
                </select>
                <button class="formBtn" type="submit">Filtrar</button>  
                
                <?php 
                //captura e definição do comando SQL gerado em FILTRAR.PHP
                //para uso em list_tarefa logo abaixo
                    if(isset($_GET['order'])){
                        $ord = $_GET['order'];
                    }
                ?>

            </form>

            <br>


        </section>
        <section id="tasks-container">
        <?php  include '../back/list_tarefa.php'; ?>
        </section>
    </main>
</body>
<script src="script.js">
</script>
</html>

