<?php
require_once 'db_connect.php';

$userName = $_POST['username'];
$password = $_POST['password'];

try{

    validation($userName, $password);

    $user = User::where('username', $userName)
        ->first();

    // パスワードチェック
    if(!password_verify($password, $user['password'])){
        throw new Exception("ログイン認証に失敗しました");
    }

    require './index.php';

} catch (Exception $e) { 
    $errorMessage = $e->getMessage();    
    require './login.php';
}


function validation($userName, $password){
    if( is_null($userName) || is_null($password) ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }

    if( $userName === '' || $password === '' ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }
}