<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");
$result = mysqli_query($con,'SELECT * FROM usuario WHERE id_usuario = "' . (int)$_GET['id'] . '"');

  $id = $_GET['id'];

    $query = mysqli_query($con, "DELETE FROM usuario WHERE id_usuario='$id'");
    if($query)
    {
      header("Location: listarUsuario.php");
    }


?>
