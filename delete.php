<?php
$conn = mysqli_connect("localhost","root","","giovista");

$id = $_GET["id"];
$sql = "DELETE FROM `register` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: register.php");
} else {
  echo "Failed: " . mysqli_error($conn);
}
