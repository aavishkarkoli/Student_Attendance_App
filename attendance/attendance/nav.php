<?php
error_reporting(0);
	session_start();
 if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1)
{
echo 	'<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-5">
  <div class="container-fluid">
  <a href="index.php">
								<img src="images/logo.png" class="img-resposive" style="max-height:20px;" alt="attendancemaster">
							</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="attendance.php" style="color: black;">Take Attendance</a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="studentdetails.php" style="color: black;">Assigned to you</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reports.php" style="color: black;">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>';
}
elseif ($_SESSION['admin']=="1")
{
  echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-5">
  <div class="container-fluid">
  <a href="index.php">
								<img src="images/logo.png" class="img-resposive" style="max-height:20px;" alt="attendancemaster">
							</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: black;">Home</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="hodpanel.php" style="color: black;">Admin Panel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>';
}
else{
	echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning mb-5">
  <div class="container-fluid">
  <a href="index.php">
								<img src="images/logo.png" class="img-resposive" style="max-height:20px;" alt="attendancemaster">
							</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="students_login.php" style="color: black;">Student Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="add_student.php" style="color: black;">Student Registration</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="teachers_login.php" style="color: black;">Teacher Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php" style="color: black;">Teacher Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hod_login.php" style="color: black;">Admin </a>
        </li>
      </ul>
    </div>
  </div>
</nav>';
}
?>
