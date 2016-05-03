<?php

/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 01/11/15
 * Time: 19:06
 */

include("../../config/connect.php");
include("../../model/Model.php");

class register
{
    private $name;
    private $password;
    private $email;
    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $model = new Model();
        if ($this->name != '' && $this->email != '' && $this->password != '') {
            $sql = "SELECT * FROM usuarios";
            $result = $this->connect()->query($sql);
            while ($table = $result->fetch_array()) {
                if ($this->email == $table['email'] && $this->password == $table['password']) {
                    return header("location:/simplessys/?page=register&logged=exist");
                    break;
                }
            }
            $model->insert($this->name, $this->email, $this->password);
            session_start();
            $_SESSION["mk"] = $this->name;
            return header("location:/simplessys/");
        } else {
            echo "Values null";
            return header("location:/simplessys/?page=login&logged=not");
        }
    }
}

$registers = new register();