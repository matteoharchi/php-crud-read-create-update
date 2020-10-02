<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';

if (empty($_POST['id'])) {
    die();
}

removeId($conn, $table, $id, $basepath);
