<?php
include 'db.php';

$m = [];
for ($i = 1; $i <= 6; $i++) {
  if (!isset($_POST["motor$i"])) {
    echo "Error: missing motor$i";
    exit;
  }
  $m[$i] = $_POST["motor$i"];
}

$sql = "INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6, status)
        VALUES ($m[1], $m[2], $m[3], $m[4], $m[5], $m[6], 0)";

echo $conn->query($sql) ? "Saved" : "Error: " . $conn->error;
$conn->close();
?>
