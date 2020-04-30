<?php require_once('../include/Session.php');?>

<?php include('../header.php') ?>
<?php 
   
      include('../functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
    }
?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					WELCOME TO PLAYER DASHBOARD
					<span><a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<div class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="updatestudent.php" class="btn btn-info btn-lg">UPDATE PLAYER DETAIL</a><br><br>                       
                        <a href="../sms/index.php" class="btn btn-info btn-lg">TASK AND TIMETABLE DETAIL</a>  <br><br>
                        <a href="../feedback/admin/mainpage.php" class="btn btn-info btn-lg">VIEW FEEDBACK</a>  <br><br>
                        <a href="../player/index.php" class="btn btn-info btn-lg"> VIEW PLAYER DETAIL</a><br><br>
                        
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('../footer.php') ?>
