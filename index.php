<?php

    require_once './public_html/db_connect.php';

    $message = 'Hello World';
    $notes = Note::all();
    
    require_once './public_html/views/index.tpl.php';
