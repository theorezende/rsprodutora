<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");


// checking the user

if(isset($_POST['submit'])){
  $nome = $_POST["nome"];
  $tipo = $_POST["tipo"];
  $data_evento = $_POST["data_evento"];
  $descricao = $_POST["descricao"];
  $tempo = $_POST["tempo"];
  $valor = $_POST["valor"];


  $nome = mysqli_real_escape_string($con, $nome);
  $descricao = mysqli_real_escape_string($con, $descricao);
  $tempo = mysqli_real_escape_string($con, $tempo);
  $valor = mysqli_real_escape_string($con, $valor);

    $query = mysqli_query($con, "INSERT INTO evento (nome,tipo, evento_status_flag, data_criacao,data_inicio,descricao,qt_horas,valor) VALUES ('$nome', '$tipo','S', NOW(), NOW(),'$descricao','$tempo','$valor')");
    if($query)
    {
      header("Location: listarEvento.php");
    }


}

?>
