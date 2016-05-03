<?php

/**
 * User: Matheus Ramos
 * Date: 25/04/2016
 * Time: 13:40
 */
class mysql
{
    private $server= 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'rsprodutora';
    public function connect()
    {
        $conn = new  mysqli($this->server, $this->user, $this->pass, $this->db);
        return $conn;
    }
}
