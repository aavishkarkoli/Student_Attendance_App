<?php include('includes/dbconnection.php'); ?>
<?php include 'header.php';?>
    
 <?php include 'nav.php';?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6  text-center  margin-auto">
      <img src="images/attendancemaster_big.png" alt="attendancemaster">
      <h3><b><i><u>Teacher Login</u></i></b></h3>

     

		<?php if(isset($_GET['invalid'])) : ?>
			<div class=" no-column-padding">
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Username Or Password.
				</div>
			</div>
		<?php endif; ?>
    <div class="">
      <form class="form-horizontal" id="loginForm" action="verify.php" method="post" data-toggle="validator">
				<div class="form-group">
          <label for="inputEmail3" class="control-label">Enter Username</label>
          <input type="text" class="form-control" id="inputEmail3" name="name" maxlength="16" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="control-label">Enter Password</label>
          <input type="password" class="form-control" id="inputPassword3"  name="pass" maxlength="16" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign in">
        </div>
      </form>
    </div>
  </div> </div>
  
