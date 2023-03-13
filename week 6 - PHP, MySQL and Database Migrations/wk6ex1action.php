<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	// Connect to server and select database
    $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

    if(!$link) {
        echo "Error: Unable to connect to MySql" . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL; 
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; 
        exit;
    }

    //echo "Success: A proper connection to MySQL was made!";
    
    mysqli_query($link, $sql);
	
	// Execute sql statement		

	$sql = "SELECT * from test";
    $result = mysqli_query($link, $sql);
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

?>
