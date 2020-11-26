<?php

    $message = 'New note';
    $userId = $_GET['userId'];
    $userId　= filter_input(INPUT_GET, 'userId');
    require_once 'views/new.tpl.php';