<?php include('includes/dbconnection.php'); ?>
<?php include 'header.php';?>
    
 <?php include 'nav.php';?>
<body>
	<div class="container">
<!-- <form action="post">
<?php 
	// if(isset($_GET['msg']))
	// 	echo "<center><h3>".$_GET['msg']."</h3></center>";
	// elseif(isset($_GET['msg1']))
	// 	echo "<center><h3>".$_GET['msg1']."</h3></center>";	
	// else
	// 	echo "<center><h3>Add hod Here!!! </h3></center>";
?>  
 <b>hodName</b> <input type="name" name="name" class="form-control" > 
 <b>Re Enter PassWord</b> <input type="password" name="pass" class="form-control"> 

 <b>RePassWord</b> <input type="password" name="repass" class="form-control"> 
 

 Enter subject <select name="subject" class="form-control">
	<option value="dm">DM</option>
	<option value="jt">JT</option>
	<option value="maths">MATHS</option>
</select> 
<br>
  <input type="submit"  class="btn btn-success" name="submit" value="SUBMIT">
  <input type="reset" name="reset" class="btn btn-warning"> 

</form> -->
<br>
<hr>
        <form method="post" action="">
            <div class="container">
                <div id="login-page">
                    <div class="container-fluid bgimage text-white" style="margin-top:0%;">
                        <div class="col-md-12 login-wrap">
                             <h4 class="text-center text-white">Add hod</h4>
                            <label for="">Name </label>
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required="required" autofocus>
                            <label for="">Email </label>
                            <input type="email" class="form-control" placeholder="Email ID" id="email"  name="email" required="required">
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                            <label for="">Qualification</label>
                            <input type="text" class="form-control" placeholder="qualifications" required="required" name="qualifications">
                             <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Password" required="required" name="pass">
                             <label for="">Username</label>
                            <input type="text" class="form-control" placeholder="username" required="required" name="username">
  
                             <label for="">Contact Number</label>
                            <input type="number" class="form-control" maxlength="10" name="number" placeholder="Contact no" required="required" min="7000000000" max="9999999999" autofocus>
                            </br>
                            <button class="btn btn-warning text-white"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
                            <a class="btn btn-success"  href="content-container.php?page=teachers_login" id="submit"> Login</a>
                            <a class="btn btn-danger"  href="../index.php" id="submit"> Back</a>
                            <hr>
                        </div>
                                           
                    </form>
</div>

<?php
 	if(isset($_POST['name']))
	{
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$qualifications=$_POST['qualifications'];
		$pass=$_POST['pass'];
		$username=$_POST['username'];
		$account=$_POST['account'];
		$number=$_POST['number'];
		$status=1;

		  $sql="INSERT INTO `hod` (`uname`, `password`, `email`, `number`, `qualifications`, `status`) VALUES ( '$name', '$pass', '$email', '$number', '$qualifications', '$status')";

             $query=mysqli_query($connect,$sql);
               if($query)
               {
                 echo '<script>alert("CONGRATULATIONS! '.$name.' you have successfully registered !!");location.href="hod_login.php"</script>';
               }
               else
               {
                echo "there is problem while executing query";
                echo mysqli_error($connect);
               }
}
 

?>
</body>
</html>