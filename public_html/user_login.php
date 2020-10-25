<?php
require_once 'db_connect.php';
try{
    $userName = $_POST['username'];
    $password = $_POST['password'];


    
    if( is_null($userName) || is_null($password) ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }

    if( $userName === '' || $password === '' ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }

    $user = User::where('username', $userName)
        ->first();
        var_dump($user->password);
    // パスワードチェック
    if(!password_verify($password, $user['password'])){
        throw new Exception('ユーザ名かパスワードが正しくありません。');
        exit;
        var_dump('e');
    }
    var_dump('a');
    $message = 'ログインしました。';
    require './index.php';
} catch (Exception $e) { 
    var_dump('p');
    $errorMessage = $e->getMessage();    
    require './login.php';
}


