<?php
  $mymarks["CO550"] = 89;
  $mymarks["CO551"] = 65;
  $mymarks["CO556"] = 56;
  $mymarks["CO557"] = 88;
  $mymarks["CO565"] = 80;
  $mymarks["CO566"] = 76;
?>
<head>
  <title>Data in table</title>
</head>
<body>
  <table border=1 align="center">
    <tr><th>Module Code</th><th>Mark</th></tr> 
    <?php
        foreach($mymarks as $index => $value)
        {
            echo("<tr><td>$index</td><td>$value</td></tr>");
        }	
    ?>
  </table>
</body>
</html>
