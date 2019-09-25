<?php
    require_once 'php/init.php';

    $content_com = new Content();
    $content_com->select('comments', 'accepte', 1);

    $comments = $content_com->show();
