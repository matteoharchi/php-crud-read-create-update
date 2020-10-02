<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

if (empty($_GET['id'])) {
    die();
}

$id = $_GET['id'];

$row = getId($conn, 'stanze', $id);
