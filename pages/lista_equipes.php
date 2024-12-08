<!-- PÁGINA DE LISTA DE EQUIPES -->
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
        <?php include '../back/header.php';?>
        </nav>
    </header>
    
    <!-- LISTA DE FUNCIONÁRIOS -->
    <main>
        <section id="tasks-container">
        <?php 
            include '../back/list_equipe.php';
        ?>
        </section>
        <!-- AVISO -->
        <p style="width: 100%; text-align: center;color: white;">Cuidado: Retirar um funcionário cadastrado em uma tarefa irá remover ambos</p>
    </main>
</body>
<script src="script.js">
</script>
</html>

