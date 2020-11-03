<?php
require_once 'db_connect.php';

$userName = $_POST['username'];
$password = $_POST['password'];

try{

    validation($userName, $password);

    $user = User::where('username', $userName)
        ->first();

    // ユーザがいない場合は↓の処理は必要ない
    if(password_verify($password, $user['password'])){
        throw new Exception('このユーザーは登録できません');
    }

    //ハッシュを作る
    $hash = password_hash($password, PASSWORD_BCRYPT);

    saveUser($userName, $hash);
    
    $message = '登録しました。';
    require './login.php';

} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require './signup.php';
}


function validation($userName, $password) {
    if( is_null($userName) || is_null($password) ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }

    if( $userName === '' || $password === '' ) {
        throw new Exception('ユーザネームかパスワードが空です。');
    }
}

function saveUser($userName, $hash) {
    $user = new User;   
    $user->username = $userName;
    $user->password = $hash;
    $user->save();
}