<?php

    require_once 'db_connect.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'メモ編集#' . $id;
        $note = Note::find($id);
    }

    require_once 'views/edit.tpl.php';
