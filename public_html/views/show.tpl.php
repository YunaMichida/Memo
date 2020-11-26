<!DOCTYPE html>
<html lang='ja'>
    <?php //include('header.inc.php'); ?>
    <body>

        <h1><?= $message ?></h1>

        <p>タイトル:<?= $note->title ?></p>
        <p><?= $note->content ?></p>

        <p><a href='index.php'>一覧に戻る</a> | <a href="edit.php?id=<?= $note->id ?>">編集</a> | <a href='destroy.php?id=<?= $note->idz ?>'>削除</a></p>


        <?php //include('footer.inc.php'); ?>
    </body>
</html>
