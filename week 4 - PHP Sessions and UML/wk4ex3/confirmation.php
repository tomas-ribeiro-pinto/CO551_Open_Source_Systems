<?php
   session_start();
   $price = 0;

   switch($_SESSION["size"])
   {
      case 'Small - £15.75':
         $price = 15.75;
         break;
      case 'Medium - £16.75':
         $price = 16.75;
         break;
      case 'Large - £17.75':
         $price = 17.75;
         break;
      case 'Extra Large - £18.75':
         $price = 18.75;
         break;
   }

   $total = $price * $_SESSION["qty"];
   echo "<h2> Your order qty is $_SESSION[qty]</h2>";
   echo "<p> $_SESSION[qty] x $_SESSION[size] = £$total</p>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";
   echo "<h2> Price to pay is £$total</h2>";
?>
