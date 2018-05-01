<?php

	session_start();
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if(isset($_POST['signup'])){
	            $name = $_POST['name'];
				$student_id = $_POST['student_id'];
				$password = $_POST['password'];
				
				$sql = "INSERT INTO users". "(name,student_id,password) ". 
				"VALUES('$name','$student_id','$password')";
				
				mysqli_select_db($conn,'student_portal');
				$retval = mysqli_query($conn,$sql);
				if($retval){
							// header("Location:user.php");
							 // print '<script type="text/javascript">'; 
								// print 'alert("The Student Id '. $_POST['student_id'].' is successfulyy registered")'; 
							 // print '</script>'; 

					          ?>
								<script>alert("Successfully Registered");
								window.location.href="user.php";</script>
							<?php
							 
						   }
								
				if(! $retval ){
								 die('Could sign up: ' . mysqli_error($con));
							}
						}
											
									
				mysqli_close($conn);


?>