<?php

    require_once './db_connect.php';
    
    $note = new Note;
    $note->title = $_POST['title'];
    $note->content = $_POST['content'];
    $note->save();

    $userNote = new UserNote;
    $userNote->note_id = $note->id;
    //POSTでuser_id取得する
    $userNote->user_id = $_POST['user_id'];
    $userNote->save();

    header('Location: show.php?id=' . $note->id);
    exit;

    
