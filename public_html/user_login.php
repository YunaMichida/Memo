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
          // パスワードチェック
    if(password_verify($password, $user['password'])){
        echo "ログイン認証に成功しました";
        require './index.php';

    }else{
        echo "ログイン認証に失敗しました";
    }
} catch (Exception $e) { 
    session_regenerate_id(true);

    
    $errorMessage = $e->getMessage();    
    require './login.php';
}


