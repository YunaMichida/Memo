<?php
require_once 'db_connect.php';

$user = new User;
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->save();
exit;

try{
    throw new Exception
    $user->username = $_POST['username'];
    } catch (Exception $e) {
        echo 'エラー:' . $e->getMessage();
    }




