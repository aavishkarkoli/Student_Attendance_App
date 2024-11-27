<?php
 include('includes/dbconnection.php'); 
include 'header.php';
 include 'nav.php';
 error_reporting(0);
session_start();
// if(!isset($_SESSION['admin_id']))
// {
// header("location:login.php");
// }
?>
<html>
<head>
<?php 
include("css_style.php")
 ?>
<!--including css files-->
</head>
<body>
<?php 
include("header.php") ?>
<!--including header-->
</div>
<h1 class="text-center my-3 d-block">Admin Page</h1>
<br><br>
<div class="col-md-12 text-center">
        <a href="allstudentinfo.php" class="btn btn-danger text-center">view Students</a>
        <a href="allstaff.php" class="btn btn-danger text-center">view Faculty</a>
        <a href="signup.php" class="btn btn-danger text-center">add faculty</a>
        <a href="add_student.php" class="btn btn-danger text-center">add student</a>
        <a href="assign.php" class="btn btn-danger text-center">Assign Subject</a>
        <a href="add_subject.php" class="btn btn-danger text-center">Add Subject</a>
        <a href="stud_assign.php" class="btn btn-danger text-center">Assign Student</a>
 </div>
<div class="container">
  <div class="row">

<div class="row no-gutters container mx-auto text-center">

</div>

<!--feedback form-->


   </div>
</div>
<br><br><br><br><br><br>
<!--taking feedback-->


</body>
</html>
