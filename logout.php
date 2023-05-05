<?php
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);
    session_destroy();

    echo "<script>location.href='index.php';</script>";
    exit;