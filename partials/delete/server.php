<?php
include __DIR__ .'/../database.php';

if (empty($_POST['id'])) {
    die();
}



$sql = "DELETE FROM stanze WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$id = $_POST['id'];
$stmt->execute();

if ($stmt) {
    header('Location: $basepath/index.php?roomId=$id');
}else {
    echo 'non ho cancellato';
}

$conn->close();
