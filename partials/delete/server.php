<?php
include __DIR__ .'/../database.php';

if (empty($_POST['id'])) {
    die();
}

$id = $_GET['id'];

$sql = "DELETE FROM stanze WHERE id=$id";
$result = $conn->query($sql);
if ($result) {
    echo 'ok';
}else {
    echo 'non ho cancellato';
}
$conn->close();