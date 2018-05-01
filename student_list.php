<?php
  include 'includes/header.php';
?>




<div class="student-list">
	<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold;margin-bottom: 100px;margin-top: 70px;">Student  List</h5>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Serial Number</th>
								<th>Name</th>
								<th>Student Id</th>
							</tr>
						</thead>

						<tbody>

								<?php					
									session_start();
												
									require("connection.php");
								
									$result = mysqli_query($conn, "SELECT * FROM users");
									
									while($row=mysqli_fetch_array($result)){

									  $id=$row['id'];
									  echo "<tr>";								
									  echo  "<td>" .  $row['id']. "</td>";
									  echo  "<td>" .  $row['name']. "</td>";
									  echo  "<td>" .  $row['student_id']. "</td>";
									  ?>
									  
									  <td><a href="delete.php?deleteid=<?php echo $id;?>" class='btn btn-danger'>Delete</a></td>
									  
									  <?php
									  echo "</tr>";
									}
								?>

						</tbody>

					</table>

				</div>
			</div>	
	</div>
</div>















<?php
   include 'includes/footer.php'
?>