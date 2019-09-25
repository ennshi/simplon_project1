<?php
    require_once 'php/init.php';
    
    $date = new Content();
    $date->select_dvalues('plats', 'date');
    $dates = $date->show();

    