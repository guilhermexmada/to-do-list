<!-- PÁGINA DE REGISTRO DE FUNCIONÁRIOS -->
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
    
    <main>
         <!-- REGISTRO DE FUNCIONÁRIOS -->
        <section id="tasks-form">
            
            <form action="../back/cad_equipe.php" method="post" onsubmit="return validaForm2()" id="formulario2">
            <h1 class="title">Registrar novo funcionário</h1>
            <label class="formLabel">Nome</label>
                <input class="formInput" name="nome" type="text">
            <label class="formLabel">CPF</label>
                <input class="formInput" name="cpf" type="text" maxlength="11">
            <label class="formLabel" class="formLabel">Função</label>
                <input class="formInput" name="funcao" type="text">
            <label class="formLabel">Turno</label>
                <input class="formInput" name="turno" type="text">
            <button class="formBtn" type="submit" >Cadastrar funcionário</button>
            </form>
            
        </section>
    </main>
</body>
<script src="script.js">
</script>
</html>

