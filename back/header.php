<?php
//COMPONENTE DE CABEÇALHO EM TODAS AS PÁGINAS DO SITE
//para cada tipo de acesso capturado em LOGIN.PHP um tipo de menu é exibido
//administrador > funcionário > zero

session_start();

function simbolo_notificacao(){
    if ($_SESSION['notificacoes'] == 0 || $_SESSION['notificacoes'] == null) {
        return '';
    } else {
        return '<span class="notificacao">' . $_SESSION['notificacoes'] . '</span>';
    }
}


//por padrão o acesso é ZERO = não logado
if (!isset($_SESSION['acess']) || $_SESSION['acess'] == null) {
    $_SESSION['log'] = 'none';
    $_SESSION['status'] = 'notlog';
    $_SESSION['acess'] = 'zero';
}

if ($_SESSION['acess'] == 'admin') {
    echo '
            <div class="item"><a target="_self" href="controle_tarefas.php">Nova Tarefa</a></div>
            <div class="item"><a href="lista_tarefas.php">Lista de Tarefas</a></div>
            <div class="item"><a href="equipes.php">Novo funcionário</a></div>
            <div class="item"><a href="lista_equipes.php">Lista de Equipe</a></div>
            <div class="item"><a href="lista_avisos.php">Avisos</a>' . simbolo_notificacao() . '</div>
            <div class="item"><a href="entrar.php">' . $_SESSION['log'] . ' : ' . $_SESSION['acess'] . '</a></div>
        ';
} else if ($_SESSION['acess'] == 'func') {
    echo '
            <div class="item"><a href="lista_tarefas.php">Lista de Tarefas</a></div>
            <div class="item"><a href="lista_avisos.php">Avisos</a> <span class="notificacao">' . $_SESSION['notificacoes'] . '</span></div>
            <div class="item"><a href="entrar.php">' . $_SESSION['log'] . ' </a></div>
        ';
} else if ($_SESSION['acess'] == 'zero') {
    echo '
        <div class="item"><a href="entrar.php">Entrar</a></div>
    ';
}
