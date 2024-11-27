<?php include('includes/dbconnection.php'); ?>
<?php include 'header.php';?>
    
 <?php include 'nav.php';?>
<body>
	<div class="container">
    <h3 class="text-center"> Add Subject</h3>
<!-- <form action="post">
<?php 
	// if(isset($_GET['msg']))
	// 	echo "<center><h3>".$_GET['msg']."</h3></center>";
	// elseif(isset($_GET['msg1']))
	// 	echo "<center><h3>".$_GET['msg1']."</h3></center>";	
	// else
	// 	echo "<center><h3>Add Faculty Here!!! </h3></center>";
?>  
 <b>facultyName</b> <input type="name" name="name" class="form-control" > 
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
        <form method="post" action="add_subject.php">
            <div class="container">
                <div id="login-page">
                    <div class="container-fluid bgimage text-black" style="margin-top:0%;">
                        <div class="col-md-12 login-wrap">
                            <label for=""> Subject Name </label>
                            <input type="text" class="form-control" placeholder="Enter Subject Name" name="name" required="required" autofocus>
                            <center><button class="btn btn-warning text-white"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i>Add </button></center>
                            <hr>
                        </div>
                                           
                    </form>
</div>

<?php
 	if(isset($_POST['name']))
	{
		
		$name=$_POST['name'];
		$status=1;

		  $sql="INSERT INTO `subject` (`name`) VALUES ( '$name')";

             $query=mysqli_query($connect,$sql);
               if($query)
               {
                 echo '<script>alert("CONGRATULATIONS! '.$name.'successfully Added !!");location.href="hodpanel.php"</script>';
               }
               else
               {
                echo "there is problem while Adding a subject";
                echo mysqli_error($connect);
               }
}
 

?>
</body>
</html>