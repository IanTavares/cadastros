<?php

    require_once('conexao.php');

    $usuarios = $_POST['usuarios'];

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    $bancoDados = new db();

    $link = $bancoDados-> conecta_mysql();

    $sql = "insert into usuarios (usuarios, email, senha) values('$usuarios', '$email', $senha)";

    mysqli_query($link, $sql);

    

?>