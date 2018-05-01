<?php
session_start();
require("connection.php");

$message="";

if(isset($_POST['userlogin'])){
// $con = mysqli_connect('localhost','root','','student_portal') or die('Unable To connect');

	$result = mysqli_query($conn,"SELECT * FROM users WHERE student_id=  '".$_POST["student_id"]."'  and password =  '".$_POST["password"]."'  ");
 
	$row = mysqli_fetch_array($result);

if(is_array($row)) {
	$_SESSION["student_id"] = $row[student_id];
	$_SESSION["name"] = $row[name];
} 
else {
	 $message = "Invalid Username or Password!";
	 mysqli_error($conn);
	 header("Location: login_error.php");
}

}

if(isset($_SESSION["student_id"])) {
header("Location:user_panel.php");
}

?>

