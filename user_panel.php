<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design for Bootstrap</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    
</head>
<body>


	<div class="row">
	    <h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold">Welcome In Student Panel</h5>
		<div class="col-md-4 col-md-offset-8">
			<a href="logout.php" class="btn btn-info logout-btn" >LOGOUT</a>
		</div>
	</div>

		


		<div class="container">
			<h2 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold">Student Details</h2>          
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>Name</th>
					  <th>Student Id</th>	
					  <th>Date</th>
					  <th>Time</th>
					  <th>Attendance</th>
					  <th>Submit</th>								
					</tr>
				  </thead>
				  <tbody>	

				  	<form class="login-form" action="user_attendance.php" method="POST">

						 <td>  
						 	<select id="name" name="name">
								  <option value="<?php echo $_SESSION["name"]?>"> <?php echo $_SESSION["name"] ?> </option> 					      
							 </select>
						 </td>

						 <td>  
						 	<select id="student_id" name="student_id">
								<option value="<?php echo $_SESSION["student_id"] ?>"> <?php echo $_SESSION["student_id"] ?> </option>							      
							 </select>
						 </td>

						 <td>  
						 	<select id="date" name="date">
								<option value="<?php echo  date("Y/m/d") ?> "> <?php echo  date("Y/m/d") ?> </option>							      
							</select>

						  </td>

						 <td>  
		
						 	<select id="time" name="time">
								<option value="<?php echo  date("h:i:sa") ?>">  <?php echo  date("h:i:sa") ?> </option>							      
							</select>

						 </td>

						 <td>
						 	
						 	<select id="attendance" name="attendance">
								<option value="present">Present</option>							      
							</select>
						 	   
						 </td>

						 <td>
						 	<button  type="submit" name="atn_submit" value="submit">Submit</button>
						 </td>		

					 </form>

				  </tbody>
				</table>
		</div>	




	<!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>


</body>
</html>