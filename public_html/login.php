<?php
require_once 'db_connect.php';

$user = new User;
$user->username = $_POST['username'];
$user->password = $_POST['passsword'];
$user->save();

exit;