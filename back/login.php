<?php 
//PROCESSAMENTO DO LOGIN DO FUNCIONÁRIO OU ADMINISTRADOR NA TABELA EQUIPE
//variável ação capturada por método GET nos botões submit da página ENTRAR

include '../conexao/conn.php';

session_start();

//variáveis de sessão padrão (quando não estiver logado)
$_SESSION['status'] = 'notlog';
$_SESSION['log'] = 'none';
$_SESSION['acess'] = 'zero';

//ao apertar botão login
if($_GET['acao'] == 'login'){
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    
    $sql = "SELECT nome FROM equipe WHERE cpf = '$cpf' ";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
    
    //logou como administrador (senha = admin)
    if($rows !== null && $senha == 'admin'){
        $_SESSION['log'] = $rows['nome'];
        $_SESSION['status'] = 'Sucesso';
        $_SESSION['acess'] = 'admin';
        unset($_SESSION['erro']);
        //verifica as notificações de avisos sempre que logar
        include 'check_aviso.php';
    }
    //logou como funcionário (cpf precisa existir na tabela equipe)
    else if($rows !== null && $senha == 'func'){
        $_SESSION['log'] = $rows['nome'];
        $_SESSION['status'] = 'Sucesso';
        $_SESSION['acess'] = 'func';
        unset($_SESSION['erro']);
        //verifica as notificações de avisos sempre que logar
        include 'check_aviso.php';
    }
    //não conseguiu logar (não preencheu cpf)
    else{
        $_SESSION['log'] = 'none';
        $_SESSION['status'] = 'notlog';
        $_SESSION['acess'] = 'zero';
        $_SESSION['erro'] = 'erro';
    };
}

//entrou e saiu da conta por botão de logout
else if($_GET['acao'] == 'logout'){
    $_SESSION['status'] = 'notlog';
    $_SESSION['log'] = 'none';
    $_SESSION['acess'] = 'zero';
    unset($_SESSION['erro']);
}



header('Location: ../pages/entrar.php');

