<!-- PÁGINA DE REGISTRO DE TAREFAS PARA ADMINISTRADOR-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../favicon-32x32.png" type="image/x-icon">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>


    <!-- CABEÇALHO -->
    <header>
        <h1>To Do List</h1>
        <nav>
            <?php include '../back/header.php'; ?>
        </nav>
    </header>

    <main>
        <!-- REGISTRO DE TAREFAS -->
        <section>
            <form action="../back/cad_tarefa.php" method="post" onsubmit="return validaForm()" id="formulario">
                <h1 class="title">Nova tarefa</h1>

                <!-- CONSULTA SQL DOS FUNCIONÁRIOS PARA DROPLIST DO FORM-->
                <?php
                include "../conexao/conn.php";

                $sql = "SELECT * FROM equipe ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                echo "
                <labeL class='formLabel'>Encarregado</label>
                <select name='encarregado' class='formInput'>";
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
                        <option value=" . $rows['cpf'] . ">" . $rows['nome'] . "</option>
                    ";
                };
                echo "</select>";
                ?>

                <!-- CAMPOS DO FORM -->
                <label class='formLabel'>Nome</label>
                <input class='formInput' name="nome_tarefa" type="text" maxlength="100">
                <label class='formLabel'>Prioridade</label>
                <input class='formInput' name="pri_tarefa" type="number" min="1" max="3">
                <label class='formLabel'>Descrição</label>
                <textarea class='formInput' name="desc_tarefa" type="text" rows="4" cols="25" maxlength="100" style="height: 50px;"></textarea>
                <label class='formLabel'>Início</label>
                <input class='formInput' name="datatempo_inicial" type="datetime-local">
                <label class='formLabel'>Entrega</label>
                <input class='formInput' name="datatempo_final" type="datetime-local">
                <button class="formBtn" type="submit">Adicionar</button>
                <button class="formBtn" type="reset">Limpar</button>

            </form>

        </section>

        <section>
            <form action="../back//grafico.php" method="post" id="formGrafico">
                <h1 class="title">Controle de tarefas</h1>
                <label>Dado de visualização</label>
                <select name="controle_tarefas" class="formInput">
                    <option value="tarefas">Tarefas cumpridas</option>
                    <option value="produtividade">Produtividade do time</option>
                </select>
                <button type="submit" class="formBtn">Gerar gráfico</button>
            </form>

            <div class="legenda">legenda</div>
            <div class="grafico">
                <div class="eixoY">Status das tarefas</div>
                <div class="graficoInterno">
                    <?php 
                        include '../back/grafico.php';
                    ?>
                </div>
                <div class="eixoX"></div>
            </div>


        </section>
    </main>
</body>
<script src="script.js">
</script>

</html>