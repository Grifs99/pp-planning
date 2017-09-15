<?php

require_once ('FormHandler.php');
require_once ('../Connector/Crud.php');

$crud = new Crud('../Data/Planner.json');
$form = new FormHandler($crud);

header('Location: ' . $_SERVER['HTTP_REFERER']);