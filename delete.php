<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `convidados` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: dashboard.php?msg=Convidado excluído com êxito.");
} else {
  echo "Falha: " . mysqli_error($conn);
}