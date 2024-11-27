<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Today's Attendance</h3>
  </div>
  <div class="panel-body">
		<?php
			
		
			$query_subject = "SELECT subject.name, subject.id from subject INNER JOIN faculty_subject WHERE faculty_subject.id = subject.id AND faculty_subject.uid = {$_SESSION['uid']}  ORDER BY subject.name";
			$sub=$conn->query($query_subject);
			$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
			$today = date("d/m/Y");
			$todayQuery = date("d-m-Y");
			$todayDBQuery = strtotime(date("Y-m-d"));
			$noOfSubject = count($rsub);
			
			for($i = 0; $i<$noOfSubject; $i++) {
				$subId = $rsub[$i]['id'];
				$sql = "SELECT sid, ispresent FROM attendance WHERE id=$subId AND date=$todayDBQuery AND uid=$facultyId";
				$stmt = $conn->prepare($sql); 
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
				if(!empty($result)){
					print "<p><a href='index.php?subject=" . $subId . "&date=" . $todayQuery ."'>Class <strong>" . $rsub[$i]['name'] ."</strong> of <strong>Today's</strong> (" . $today .")</a> <span class='label label-success'>Attendance Recoreded</span> </p>";
				}
				else {
					print "<p><a href='index.php?subject=" . $subId . "&date=" . $todayQuery ."'>Class <strong>" . $rsub[$i]['name'] ."</strong> of <strong>Today's</strong> (" . $today .")</a> <span class='label label-warning'>Mark Attendance Now!</span></p>";
				}
			}
		?>
  </div>
</div>