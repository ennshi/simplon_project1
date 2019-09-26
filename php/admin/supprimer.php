<?php
require_once '../init.php';

$enreg = new User();
$enreg->supprimer($_POST['table'], 'id', $_POST['id']);

echo "Lе record id = {$_POST['id']} est supprimé";