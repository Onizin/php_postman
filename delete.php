<?php

require_once 'helper.php';
parse_str(file_get_contents("php://input"), $_DELETE);

$id = $_DELETE['id'];
if (empty($id)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'ID cannot be empty']);
    exit;
}

// DELETE query
$sql = "DELETE FROM list WHERE id = '$id'";
if (mysqli_query($db_connection, $sql)) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Data deleted successfully']);
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => mysqli_error($db_connection)]);
}

?>
