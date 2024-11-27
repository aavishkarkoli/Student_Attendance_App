<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Pending Attendance</h3>
  </div>
  <div class="panel-body">
		<?php
			
			for($i = 1; $i < 8; $i++) {
				$dateCurrentYMD = date('Y-m-d', strtotime($todayYMD ." -$i day"));
			
				$queryTimeStamp = strtotime($dateCurrentYMD);
				$dateCurrent = date('d/m/Y', $queryTimeStamp);
								
				$query_subjectPending = "SELECT subject.name, subject.id from subject INNER JOIN faculty_subject WHERE faculty_subject.id = subject.id AND faculty_subject.uid = {$_SESSION['uid']}  ORDER BY subject.name";
				$subPending=$conn->query($query_subjectPending);
				$rsubPending=$subPending->fetchAll(PDO::FETCH_ASSOC);
				$today = date("d/m/Y");
				$todayQuery = date("d-m-Y");
				$todayDBQuery = strtotime(date("Y-m-d"));
				$noOfSubjectPending = count($rsubPending);
				
				$weekday= strtolower(date("l", strtotime($dateCurrentYMD)));
				
				if(($weekday!="saturday") && ($weekday!="sunday")) {
					for($j = 0; $j<$noOfSubjectPending; $j++) {
						$subIdP = $rsubPending[$j]['id'];
						$sqlPending = "SELECT sid, ispresent FROM attendance WHERE id=$subIdP AND date=$queryTimeStamp AND uid=$facultyId";
						$stmtP = $conn->prepare($sqlPending); 
						$stmtP->execute();
						$resultP = $stmtP->fetchAll(PDO::FETCH_ASSOC); 
						if(!empty($resultP)){
							print "<p><a href='index.php?subject=" . $subIdP . "&date=" . $dateCurrentYMD ."'>Class <strong>" . $rsubPending[$j]['name'] ."</strong> of <strong>" . $dateCurrent ."</strong></a> <span class='label label-success'>Attendance Recoreded</span> </p>";
						}
						else {
							print "<p><a href='index.php?subject=" . $subIdP . "&date=" . $dateCurrentYMD ."'>Class <strong>" . $rsubPending[$j]['name'] ."</strong> of <strong>" . $dateCurrent ."</strong></a> <span class='label label-warning'>Mark Attendance Now!</span></p>";
						}
					}
					
					if ($i !== 7) {
						print "<hr>";
					}
				}
			}
				
		?>
		
  </div>
</div>