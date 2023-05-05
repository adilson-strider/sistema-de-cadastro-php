<?php
    
    session_start();

    if(empty($_POST) or empty($_POST["usuario"] or empty($_POST["senha"])))
    {
         echo "<script>location.href='index.php';</script>";
    }

    include('db_conn.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // query
    $sql = "SELECT * FROM usuarios 
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if ($qtd > 0){

        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;

        echo "<script>location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Usuário ou senha incorreto.')</script>";
        echo "<script>location.href='index.php';</script>";
    }
