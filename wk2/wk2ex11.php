<?php

$mymarks["CO550"] = 89;
$mymarks["CO551"] = 65;
$mymarks["CO556"] = 56;
$mymarks["CO557"] = 88;
$mymarks["CO565"] = 80;
$mymarks["CO566"] = 76;

$total = 0;

echo("My modules and marks:<br/>");
foreach($mymarks as $index => $value)
{
    $total = $total + $mymarks[$index];
    echo ("Module $index - $value%<br/>");
}

$average = $total /  6;    

echo("<br/><strong> Average of Marks:</strong> $average%");

?>