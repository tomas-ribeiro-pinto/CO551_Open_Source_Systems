<?php	

	// Connect to server and select database
    $link = mysqli_connect("127.0.0.1", "admin", "admin", "test");

    session_start();
    $_SESSION['id'] = $_GET['id'];


    //Execute sql statement
    $sql = "SELECT * from test where ID = '$_GET[id]'";
    $result = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="wk6ex2action2.php" method="post">
	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="Save"/>
</form>
</body>
