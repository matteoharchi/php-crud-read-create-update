<?php
include __DIR__ .'/../database.php';

if (empty($_GET['id'])) {
    die();
}

$id = $_GET['id'];

$sql = "SELECT id,room_number,floor FROM stanze WHERE id=$id";
$result = $conn->query($sql);
var_dump($result);
if ($result && $result->num_rows > 0) {
      $row = $results->fetch_assoc();

} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();