<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");


// checking the user

if(isset($_POST['submit'])){
  $nome = $_POST["nome"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $perfil = $_POST["perfil"];


  $nome = mysqli_real_escape_string($con, $nome);
  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

    $query = mysqli_query($con, "INSERT INTO usuario (nome, usuario_status_flag, data_criacao,data_inicio,usuario,senha,perfil) VALUES ('$nome', 'S', NOW(), NOW(),'$username','$password','$perfil')");
    if($query)
    {
    	echo "Cadastrado!";
      header("Location: cadastrarUsuario.php");
    }


}

?>
