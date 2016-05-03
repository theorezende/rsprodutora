<?php

// establishing the MySQLi connection



$con = mysqli_connect(“localhost”,”root”,””,”rsprodutora”);


// checking the user

if(isset($_POST[‘login’])){

$email = mysqli_real_escape_string($con,$_POST[’usuario’]);

$pass = mysqli_real_escape_string($con,$_POST[‘senha’]);

$sel_user = “ select * from usuario where usuario=’$email’ AND senha=’$pass’”;

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION[‘usuario’]=$email;

echo “<script>window.open(‘index.php’,’_self’)</script>”;

}

else {

echo “<script>alert(‘Email or password is not correct, try again!’)</script>”;

}

}

?>
