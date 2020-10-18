<?php
require_once 'db_connect.php';

try{
    $userName = $_POST['username'];
    $password = $_POST['password'];
    
    if( is_null($userName) || is_null($password) ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }

    $user = new User;
    $user->username = $userName;
    $user->password = $password;
    $user->save();

} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require './view/signup.tpl.php';
}
