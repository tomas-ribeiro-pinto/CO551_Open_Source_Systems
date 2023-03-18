<?php

  header("Content-type: image/jpeg");

  $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
