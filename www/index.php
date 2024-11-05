<?php

use Freelas\Model\Usuario;

require '../vendor/autoload.php';


$u = new Usuario;

$u ->nome = 'Marília';
$u ->email = 'stefenon79.marilia@gmail.com';
$u ->senha = '123';
$u->salvar();
print_r($u);

/* $users = Usuario::lista();
foreach($users as $u){
    echo "<p>$u->nome</p>";*/


