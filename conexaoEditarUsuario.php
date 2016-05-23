<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");
$result = mysqli_query($con,'SELECT * FROM usuario WHERE id_usuario = "' . (int)$_GET['id'] . '"');


// checking the user

if(isset($_POST['submit'])){
  $id = $_GET['id'];
  $nome = $_POST["nome"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $perfil = $_POST["perfil"];


  $nome = mysqli_real_escape_string($con, $nome);
  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

    $query = mysqli_query($con, "UPDATE usuario SET nome='$nome',usuario='$username',senha='$password',perfil='$perfil' WHERE id_usuario='$id'");
    if($query)
    {
      header("Location: listarUsuario.php");
    }


}

?>
