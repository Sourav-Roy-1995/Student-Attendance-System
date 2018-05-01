<?php

	session_start();
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if(isset($_POST['atn_submit'])){
	            $name = $_POST['name'];
				$student_id = $_POST['student_id'];
				$date = $_POST['date'];
				$time = $_POST['time'];
				$attendance = $_POST['attendance'];
				
				$sql = "INSERT INTO attendance". "(name,student_id,date,time,attendance) ". 
				"VALUES('$name','$student_id','$date','$time','$attendance')";
				
				mysqli_select_db($conn,'student_portal');
				$retval = mysqli_query($conn,$sql);
				if($retval){
							// header("Location:user.php");
							 // print '<script type="text/javascript">'; 
								// print 'alert("The Student Id '. $_POST['student_id'].' is successfulyy registered")'; 
							 // print '</script>'; 

					         ?>
								<script>alert("Attendance Successfully Submitted");
								window.location.href="user_panel.php";</script>
							<?php
							 
						   }
								
				if(! $retval ){
								 die('Could sign up: ' . mysqli_error($con));
							}
						}
											
									
				mysqli_close($conn);


?>