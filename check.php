	


		




					<?php					
					session_start();
								
					require("connection.php");

					echo $student_id = $_SESSION['student_id']; 

					$array = array();  
				
					$result = mysqli_query($conn, "SELECT * FROM users WHERE student_id =".$student_id);
					
					echo "<pre>"; print_r($result);
					// while($row=mysqli_fetch_assoc($result)){
					//   $id=$row['id'];
					//   echo "<tr>";
					//   echo  "<td>" .  $row['name']. "</td>";
					//   echo  "<td>" .  $row['student_id']. "</td>";
					//   ?>
					  
					  
					   <?php
					//   echo "</tr>";
					// }

				//}
					?>



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

				$row = mysqli_fetch_array($retval);

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
								
									
				mysqli_close($conn);

?>