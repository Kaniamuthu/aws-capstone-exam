<?php
$conn = mysqli_connect("RDS_ENDPOINT", "admin", "password", "mysql");
if ($conn) {
  echo "Database Connected Successfully";
} else {
  echo "Database Connection Failed";
}
?>
