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
			<h1 class="page-header">Your Subjects and Students</h1>  
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Subjects</h3>
				</div>
				<div class="panel-body">
					
					<?php
						$output = '';
		
						$query_subject = "SELECT subject.name, subject.id from subject INNER JOIN faculty_subject WHERE faculty_subject.id = subject.id AND faculty_subject.uid = {$uid}  ORDER BY subject.name";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						$noOfSubject = count($rsub);
						
						for($i = 0; $i<$noOfSubject; $i++) {
							$output .= $rsub[$i]['name'];
							$output .= ',&nbsp;';
						}
						print $output;
					?>
					
				</div>
			</div>
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Students</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Roll No</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$outputData = '';
							$studentQuery = "SELECT DISTINCT name, rollno FROM `Student` INNER JOIN student_subject INNER JOIN student WHERE faculty_subject.id = student_subject.id AND student_subject.sid = student.sid AND faculty_subject.uid = $uid";
							
							$stmtStudent = $conn->prepare($studentQuery); 
							$stmtStudent->execute();
							$resultStudent = $stmtStudent->fetchAll(PDO::FETCH_ASSOC); 
							
							for($i = 0; $i<count($resultStudent); $i++) {
								$outputData .= "<tr>";
								$outputData .= "<td>" . $resultStudent[$i]['rollno'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['name'] . "</td>";
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