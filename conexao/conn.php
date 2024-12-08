<?php 
//CONEXÃO COM BANCO DE DADOS LOCAL
date_default_timezone_set('America/Sao_Paulo');
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "todolist";

    $conn = mysqli_connect($server,$user,$password,$database);

?>