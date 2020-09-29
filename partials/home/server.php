<?php
include __DIR__ .'/../database.php';

$sql = "SELECT id,room_number,floor FROM stanze";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
// output data of each row
    $results = [];
    while($row = $result->fetch_assoc()) {
        $results[] = $row;
    }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();