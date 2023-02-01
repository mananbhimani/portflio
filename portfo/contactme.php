<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactme";

$conn = mysqli_connect($servername,$username, $password, $database);
 
if (!$conn){
	die("Could not connect to");
}
else{
	echo "Connecting to";
}


if(isset($_POST['name'])){

	if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['msg'])) 
	{
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$msg = $_POST['msg'] ;
			
			$query= "INSERT INTO `contactme`(`name`,`phone`,`email`,`msg`) VALUES('$name','$phone','$email','$msg')";
			$run = mysqli_query($conn, $query);
			if ($run)
			{
					echo '<script>alert("submit successfully")</script>';
			}
			else 
			{
					echo '<script>alert(" not submit successfully")</script>';
			}
	}
	else 
	{
		echo "all fields required";
	}

}

?>