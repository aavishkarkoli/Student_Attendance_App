<?php include('includes/dbconnection.php'); ?>
<?php include 'header.php';?>
    
 <?php include 'nav.php';?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6  text-center  margin-auto">
      <img src="images/attendancemaster_big.png" alt="attendancemaster">
      <h3><b><i><u>Admin Login Welcome Sir/madam</u></i></b></h3>
   
		<?php if(isset($_GET['invalid'])) : ?>
			<div class=" no-column-padding">
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Username Or Password.
				</div>
			</div>
		<?php endif; ?>
    <div class="">
      <form class="form-horizontal" id="loginForm" action="hod_login.php" method="post" data-toggle="validator">
				<div class="form-group">
          <label for="inputEmail3" class="control-label">Username</label>
          <input type="text" class="form-control" id="inputEmail3" name="name" maxlength="16" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="control-label">Password</label>
          <input type="password" class="form-control" id="inputPassword3"  name="pass" maxlength="16" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign in">
        </div>
      </form>
    </div>
  </div> </div>
  


  <?php
     include 'includes/dbconnection.php';
     if(isset($_POST['submit']))
     {
         $nm=$_POST['name'];
        $pass=$_POST['pass'];
        if( isset($nm) && isset($pass))
      {
        if(!empty($nm) && !empty($pass) )
      {
          $stmt = $conn->prepare("SELECT uid, uname FROM hod WHERE uname= ? AND password=?"); 
            $stmt->execute(array($nm,$pass));
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
            $uid = $result[0]['uid'];
						$uname = $result[0]['uname'];
						session_start();
            // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
            
                
								$_SESSION['uid'] = $uid;
								$_SESSION['uname'] = $uname;
								$_SESSION['admin'] = "1";
                echo '<script>alert("Login successfully");location.href="hodpanel.php";</script>';
            }
            else
            {
              echo '<script>alert("Incorrect Username or password");location.href="hod_login.php";</script>';
            }
            
            
          }
          else
          {
            echo '<script>alert("enter Username or password");location.href="hod_login.php";</script>';
          }
        }
      }

?>