<?php 

    require_once 'init.php';

    $content = new Content();
    $content->collect('users');
    $reservations = $content->show();

    $content2 = new Content();
    $content2->collect('comments');
    $comments = $content2->show();

    $content3 = new Content();
    $content3->collect('plats');
    $plats = $content3->show();


