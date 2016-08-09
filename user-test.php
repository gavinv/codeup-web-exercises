<?php
require_once 'user.php';

// $user = new User();
// $user->username = 'Guy Guyverson';
// $user->email = 'hotmale@hotmail.com';
// $user->password = 'password';
// $user->save();

$user = User::find(1);
$user->email = 'hotmale@gmail.com';
$user->save();

$users = User::all();
var_dump($users);

$user = User::find(1);
// $user->delete();