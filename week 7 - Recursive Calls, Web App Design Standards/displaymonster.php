<?php
  
$conn = mysqli_connect("127.0.0.1", "admin", "admin", "test");

$sql = "select id from monster;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close();
?>
