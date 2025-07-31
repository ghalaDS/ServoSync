<?php
include 'db.php';

$sql = "SELECT * FROM poses WHERE status = 0 ORDER BY id DESC";
$result = $conn->query($sql);

$poses = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $poses[] = $row;
  }
}

echo json_encode($poses);
$conn->close();
?>
