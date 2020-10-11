<!DOCTYPE html>
<html lang='ja'>
    <?php //include('header.inc.php'); ?>
    <body>

        <h1><?= $message ?></h1>

        <p>タイトル:<?= $note->title ?></p>
        <p><?= $note->content ?></p>

        <p><a href='index.php'>一覧に戻る</a> | 編集 | <a href='destroy.php?id=<?= $note->id ?>'>削除</a></p>

        <?php //include('footer.inc.php'); ?>
    </body>
</html>
