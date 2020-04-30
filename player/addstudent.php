<?php require_once('../include/Session.php');?>



<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">INSERT PLAYER DETAIL</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      PLAYER ID.:<input type="text" class="form-control" name="roll" placeholder="Enter Player ID" >
				  </div>
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      Team name: <input type="text" class="form-control" name="city" placeholder="Enter Team name" required>
				  </div>
				  <div class="form-group">
				    
				    Phone No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Phone No." required>
				  </div>
				  <div class="form-group">
				    
				    Team:<input type="number" class="form-control" name="standard" placeholder="Enter Team" required>
				  </div>

				   <div class="form-group">
				    
				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
		
			include ('../dbcon.php');
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$standard=$_POST['standard'];
			include('ImageUpload.php');

			$sql = "INSERT INTO `student`( `rollno`, `name`, `city`, `pcontact`, `standard`,`image`) VALUES ('$roll','$name','$city','$pphone',$standard,'$imgName')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast roll no. and fullname");
				</script>
				<?php
		}


	}

 ?>








