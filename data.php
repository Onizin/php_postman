<?php

require_once 'helper.php';

// Example SELECT query
$sql = "SELECT * FROM list ORDER BY id DESC ";
$result = mysqli_query($db_connection, $sql);

$data = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => mysqli_error($db_connection)]);
}


?>