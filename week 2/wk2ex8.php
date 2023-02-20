<?php
  $topModules[0] = "Open Source Systems";
  $topModules[1] = "Web Services";
  $topModules[2] = "Software Engineering";
  $topModules[3] = "Mobile Systems";
  $topModules[4] = "Programming 1";
  $topModules[5] = "Programming 2";
  $topModules[6] = "OOAD";


  for($count = 0; $count < 7;$count++)
  {
    // display order from 1
    $pos = $count + 1;
    echo "$pos module is $topModules[$count] <br/>";
  }	
?>

