<?php

require_once 'helper.php';

$todo = $_POST['todo'] ;

// Example INSERT query
$sql = "INSERT INTO list (todo) VALUES ('$todo')";
if (mysqli_query($db_connection, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Data inserted successfully']);
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => mysqli_error($db_connection)]);
}


?>