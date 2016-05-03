<?php

/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 01/11/15
 * Time: 01:50
 */

class Model extends mysql
{
    private function filter($args)
    {
        return addslashes($args);
    }

    public function insert($you, $email, $password)
    {
        $you = $this->filter($you);
        $password = $this->filter($password);
        $email = $this->filter($email);

        $sql = "INSERT INTO usuarios(id, you, password, email) VALUES (
                 '',
                '$you',
                '$password',
                '$email'
        )";

        $success = $this->connect()->query($sql);
        if ($success) {
           echo "Sent";
        } else {
           echo "erro! Dont sent.";
        }
    }
}