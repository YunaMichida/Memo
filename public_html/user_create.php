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
    
    if ($existsUser) {
        throw new Exception('この情報では登録出来ません。');
    }
    //ハッシュを作る
    $hash = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
    $user = new User;
    $user->username = $userName;
    $user->password = $hash;
    $user->save();
    
    $message = '登録しました。';
    require './login.php';
    } catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require './signup.php';
}


