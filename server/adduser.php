<?php 
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "dolphin_crm";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(isset($_POST['submit']))
{
    $firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `role`) VALUES ('$firstName', '$lastName', '$email', '$password', '$role')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo ' <script type = "text/javascript"> alert ("Data Saved") </script>';
    }

    else {
        echo ' <script type = "text/javascript"> alert ("Data not Saved") </script>';
    }
}
                            
/*if (!$conn) {
	echo "Connection failed!";
}
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
   // $role = $_POST['role'];
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(firstName, lastName, email, password) values(?, ?, ?, ? )");
		$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Added successfully...";
		$stmt->close();
		$conn->close();
	}*/
?>