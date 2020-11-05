<?php

    require_once './db_connect.php';

    $message = 'Hello World';
    $notes = USer_note::all();

    require_once 'views/index.tpl.php';
