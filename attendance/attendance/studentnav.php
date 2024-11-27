<?php
error_reporting(0);
	session_start();

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
          <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>';

?>
