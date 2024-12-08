<!-- PÁGINA DE LOGIN -->
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
<!-- MENU -->
    <header>
        <h1>To Do List</h1>
        <nav>
        <?php
        include '../back/header.php';?>
        </nav>
    </header>
    
    <main>
         <!-- CAMPOS DE LOGIN -->
        <section id="tasks-form">
            
        <form action="../back/login.php?acao=login" method="post">
            <h1 class="title">Entrar</h1>
            <label class="formLabel">CPF</label>
                <input class="formInput" name="cpf" type="text" maxlength="11">
            <label class="formLabel" >Senha de Administração</label>
                <input class="formInput" name="senha" type="password">
            <button class="formBtn" type="submit">Log In</button>

            </form>
            <!-- RETORNO DO LOGIN (variáveis de sessão definidas em LOGIN.PHP) -->
            <?php 
            //se estiver logado, exibe botão de logout
                if($_SESSION['status'] !== 'notlog'){
                    echo '
                    <form action="../back/login.php?acao=logout" method="post">
                        <button type="submit" class="formBtn">Log out</button>
                    </form>
                    ';
                }
                //se não conseguiu logar, exibe erro 
                if(isset($_SESSION['erro'])){
                    echo $_SESSION['erro'];
                }
            ?>
            
        </section>
    </main>
</body>
<script src="script.js">
</script>
</html>

