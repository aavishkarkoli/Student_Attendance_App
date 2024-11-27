<?php 
session_start();
	include 'config1.php';
	$uid = $_SESSION['uid'];
?>
<?php include 'header.php';?>
<?php include 'nav.php';?>
<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-md-14 col-lg-14">
			<h1 class="page-header">All Staff</h1>  
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
 				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Staff</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Id No</th>
							<th>Name</th>
							<th>Email</th>
							<th>NUmber</th>
							<th>Qualifications</th>
							<th>Assign Subject</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$outputData = '';
							$studentQuery = "SELECT * from faculty";
							$stmtStudent = $conn->prepare($studentQuery); 
							$stmtStudent->execute();
							$resultStudent = $stmtStudent->fetchAll(PDO::FETCH_ASSOC); 
							for($i = 0; $i<count($resultStudent); $i++) {
								$outputData .= "<tr>";
								$outputData .= "<td>" . $resultStudent[$i]['uid'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['uname'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['email'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['number'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['qualifications'] . "</td>";
								$outputData .= '<td><a href="assign_subject.php?uid='. $resultStudent[$i]['uid'] .'" class="btn btn-primary">Assign</a></td>';
								$outputData .= "</tr>";
							}
							print $outputData;
							
						?>
						</tbody>
					</table>
				</div>
			</div>
			
						
		</div>
	</div>
</div>