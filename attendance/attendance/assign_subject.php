<?php 

include('includes/dbconnection.php');
include 'header.php';
include 'nav.php';
session_start();
$teacher_id=$_GET["uid"];
echo $teacher_id;
 
 	if(isset($_POST['submit']))
	{
$id=$_POST['subject'];
		  $sql="INSERT INTO `faculty_subject` (`uid`, `id`) VALUES ( '$teacher_id', '$id')";

             $query=mysqli_query($connect,$sql);
               if($query)
               {
                 echo '<script>alert("Subject  successfully Assigned !!");location.href="hodpanel.php"</script>';
               }
               else
               {
                echo "there is problem while executing query";
                echo mysqli_error($connect);
               }
}
 
 
?>


<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Reports </h1>  
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-lg-12">
			<form action="" method="Post" class="form-inline" data-toggle="validator">
				<div class="form-group">
					<label for="select" class="control-label">Subject: &nbsp</label>
					<?php
						$query_subject = "SELECT subject.name, subject.id from subject ";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						//print_r($rsub);
						$subnm=$rsub[0]['name'];
						$subid=$rsub[0]['id'];
						//echo "<h3>".$subnm." ".$subid."</h3>";
					
						echo "<select name='subject' class='form-control' required='required'> &nbsp;";
						for($i = 0; $i<count($rsub); $i++)
						{
							if ($_GET['subject'] == $rsub[$i]['id']) {
								echo"<option value='". $rsub[$i]['id']."' selected='selected'>".$rsub[$i]['name']."</option>";
							}
							else {
								echo"<option value='". $rsub[$i]['id']."'>".$rsub[$i]['name']."</option>";
							}
						}
						echo "</select><br>";
					?>
				</div>
				&nbsp;
		 
				&nbsp;
			
				&nbsp;
				<input type="hidden" name="page" value="reports">
				<input type="submit" class="btn btn-info" name="submit" value="Assign">
			</form>
		</div>	
	</div>
</div>

