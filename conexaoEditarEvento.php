<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");
$result = mysqli_query($con,'SELECT * FROM evento WHERE id_evento = "' . (int)$_GET['id'] . '"');


// checking the user

if(isset($_POST['submit'])){

  $id = $_GET['id'];
  $nome = $_POST["nome"];
  $tipo = $_POST["tipo"];
  $data_evento = $_POST["data_evento"];
  $descricao = $_POST["descricao"];
  $tempo = $_POST["tempo"];
  $valor = $_POST["valor"];



    $query = mysqli_query($con, "UPDATE evento SET nome='$nome',tipo='$tipo',data_inicio='$data_evento',descricao='$descricao',qt_horas='$tempo',valor='$valor' WHERE id_evento='$id'");
    if($query)
    {
      header("Location: listarEvento.php");
    }


}

?>
