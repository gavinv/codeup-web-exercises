<?php
require_once 'user.php';

$user = new User();
$user->username = 'Guy Guyverson';
$user->email = 'hotmale@hotmail.com';
$user->password = 'password';
$user->save();