<?php

/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 01/11/15
 * Time: 01:44
 */

$response = $_REQUEST['page'];
$page = '';
switch ($response) {
    case 'home':
        $page = 'views/home/index.html';
        break;
    case 'login':
        $page = 'views/account/login.html';
        break;
    case 'register':
        $page = 'views/account/register.html';
        break;
    default:
        $page = 'views/home/index.html';
}