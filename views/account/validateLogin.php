<?php

/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 01/11/15
 * Time: 14:28
 */

include_once("../../config/connect.php");

class validateLogin extends mysql
{
    private $email;
    private $password;
    public function validate()
    {
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $Mysql = new mysql();
        $sql = "SELECT * FROM usuarios";
        $result = $this->connect()->query($sql);
        $exist = '';
        while ($tb = $result->fetch_array()){
            if ($tb['email'] == $this->email && $tb['password'] == $this->password){
                session_start();
                $_SESSION["mk"] = $tb['you'];
                return header("location:/simplessys/");
                break;
            }
        }
        return header("location:/simplessys/?page=login&logged=not");
    }
}

$validate = new validateLogin();
$validate->validate();

?>