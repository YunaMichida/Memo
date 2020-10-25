<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>ログイン機能</title>
  </head>

  <body>
    <h2>ログイン機能</h2>
    <div class="sign-up">
        <form action="user_login.php" method="POST">
            <div>
                <label for="signup-id">アカウント名</label>
                <div>
                    <input name="username" id="signup-id" placeholder="ユーザーネームを入力してください">
                </div>
            </div>
            <div>
                <label for="signup-pass">パスワード</label>
                <div>
                    <input name="password" id="signup-pass" placeholder="パスワードを入力してください">
                </div>
            </div>
            <div>
                <button name="signup" type="submit">LOGIN</button>
            </div>
        </form>
    </div>
  </body>   
</html>