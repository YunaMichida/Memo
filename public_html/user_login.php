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

    $existsUser = User::where('username', $userName)
        ->where('password', $password)
        ->exists();
    
    // パスワードチェック
    if(!password_verify($_REQUEST['password'], $user['hash'])){
        throw new Exception('ユーザ名かパスワードが正しくありません。');
        exit;
    }

    
    $message = 'ログインしました。';
    require './index.php';
    } catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require './login.php';
}


