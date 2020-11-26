<?php

    require_once 'db_connect.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $user_note = UserNote::find($userd);
        $note->delete();
    }

    $notes =  Note::whereIn('id',$noteIds)
    ->get();
    $notes->delet();

    header('Location: index.php');
    exit;
