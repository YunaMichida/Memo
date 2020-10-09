<?php

    require_once 'public_html/db_connect.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'Show note #' . $id;
        $note = Note::find($id);
    }

    $my_html = Michelf\Markdown::defaultTransform($note->content);

    require_once 'public_html/views/show.tpl.php';
