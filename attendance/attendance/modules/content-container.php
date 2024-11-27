<!-- Page Content -->
	<div id="page-content-wrapper">
			<div class="container">
				<div class="row">
				<?php
					$start=false;
					// session_start();
					if (isset($_POST['student']))
					 {
						include 'modules/studentdata.php';
					}
					else {
						if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) {
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
								switch ($page) {
									case 'dashboard':
									case 'reports':
									case 'help':
									case 'studentinfo':
										include 'modules/'.$page.'.php';
										break;
									default:
										include 'modules/attendance.php';
										break;
								}
							}
							else {
								include 'modules/attendance.php';
							}
						}
						else {
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
								switch ($page) {
									case 'moduels/teacherspage':
										include 'modules/teacherspage.php';
										break;
									case 'studentspage':
										include 'modules/studentspage.php';
										break;
									default:
										include 'modules/login.php';
										break;
									case 'logout':
										include 'modules/logout.php';
									case 'teacherlogin':
										include 'modules/teachers_login.php';
								}
							}
							else {
								include 'teachers_login.php';
							}
						}
					}
					?>
				</div>
			</div>
	</div>
	<!-- /#page-content-wrapper -->