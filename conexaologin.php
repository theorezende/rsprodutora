<?php

// establishing the MySQLi connection



$con = mysqli_connect("mysql.hostinger.com.br","root","123456","u766907098_rspro");


// checking the user

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($con,$_POST['usuario']);

$pass = mysqli_real_escape_string($con,$_POST['senha']);

$sel_user = " select * from usuario where usuario='$email' AND senha='$pass' ";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['usuario']=$email;
header("Location: index.php");

}

else {
echo "erro no login";

}

}

?>
