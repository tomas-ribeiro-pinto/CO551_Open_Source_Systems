<?php
     $lottodate = date("Ymd");
     echo "The lottery numbers for " . date("d/m/Y") . " are ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
     $conn = mysqli_connect("localhost", "admin", "admin", "test");

     $sql = "insert into lotto (lottodate,number1,number2,";
     $sql = $sql . "number3,number4,number5,number6)";
     $sql = $sql . " values ($lottodate,$number[1],$number[2],";
     $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

     mysqli_query($conn, $sql);
     echo "<br/>This weeks numbers have been saved";
?>
