<?php
	// Connect to server and select database
    $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

    session_Start();

    //Execute sql statement
    $sql = "UPDATE test SET name = '$_POST[txtname]', email = '$_POST[txtemail]', phone_number = '$_POST[txttelno]' where ID = '$_SESSION[id]'";

    mysqli_query($link, $sql);
    header("Location: /wk6ex2.php");
    exit();

?>