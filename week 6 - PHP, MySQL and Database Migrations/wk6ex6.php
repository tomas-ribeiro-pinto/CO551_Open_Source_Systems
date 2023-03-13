<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(22000,15,200) . " tax";
	html_footer();
?>

