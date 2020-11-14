<?php

    require_once './db_connect.php';

    $message = 'Hello World';
    $user_note = UserNote::where('user_id', $userId)
        ->get();


    $noteIds = [];
    foreach($user_note as $user_note){   
        $noteIds[] = $user_note->note_id;
    }

    // collectionで返ってくる
    $notes =  Note::whereIn('id',$noteIds)
       ->get();

    require_once 'views/index.tpl.php';
