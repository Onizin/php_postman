<?php

require_once 'helper.php';
parse_str(file_get_contents("php://input"), $_PUT);

$id = $_PUT['id'];
$todo = $_PUT['todo'];
if (empty($id) || empty($todo)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'ID and todo cannot be empty']);
    exit;
}

// Example UPDATE query
$sql = "UPDATE list SET todo = '$todo' WHERE id = '$id'";
if (mysqli_query($db_connection, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Data updated successfully']);
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => mysqli_error($db_connection)]);
}

?>