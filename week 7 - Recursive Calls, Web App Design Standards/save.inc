<?php

function saveMonster()
{
    $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];


    // Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
    
    $sql = "INSERT INTO monster (name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

    mysqli_query($link, $sql);
}

function displayTable()
{
    $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");
    
    $sql1 = "select id,name from monster;";

    $result = mysqli_query($link, $sql1);
    
    
    echo "<table class='table' align='center' border='1'>";
    echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";
    
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td><a href='getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
      echo "<td><img src='getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
      echo "</tr>";
    }
    
    echo "</table>";
    
    mysqli_close();
}
?>