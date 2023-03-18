<?php
  
$link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];


// Get the file binary data
$imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
$audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
  
$sql = "INSERT INTO monster (name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

mysqli_query($link, $sql);

header("Location: wk7ex1.html");
exit();
?>
