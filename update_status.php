<?php
include 'db.php';

$id = $_POST['id'];
$sql = "UPDATE poses SET status = 1 WHERE id = $id";

echo $conn->query($sql) ? "Deleted" : "Error: " . $conn->error;
$conn->close();
?>
