<?php include('includes/dbconnection.php'); ?>
<?php include 'header.php';?>
 <?php include 'nav.php';?>
<div class="container">
    <div class=" text-center">
    <div class="col-md-3"></div>
    <div class= "text-center  margin-auto">
      <img src="images/attendancemaster_big.png" alt="attendancemaster"></div>
      <h3><b><i><u>Student Login</u></i></b></h3>
    </div>
  
  <div class="row">
		<?php if(isset($_GET['invalid'])) : ?>
			<div class=" no-column-padding">
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Student Roll No.
				</div>
			</div>
		<?php endif; ?>
	
    <div class="col-md-12">
      <form class="form-horizontal" action="studentdata.php" method="post" id="studentForm" data-toggle="validator">
        <div class="form-group">
          <label for="rollno" class="control-label"> Enter Your Roll No.</label>
          <input type="number" class="form-control" id="rollno" maxlength="6" name="rollno" placeholder="Roll No." required>
        </div>
				
        <div class="form-group">
          <label for="password" class="control-label"> Enter Your Password</label>
          <input type="password" class="form-control" id="pass" maxlength="8" name="pass" placeholder="Password" required>
        </div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-info btn-block" value="Login">
				</div>
				
				<input type="hidden" name="student" value="y" />
      </form>
    </div>  
  </div>
</div>