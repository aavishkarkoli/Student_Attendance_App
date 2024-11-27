<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">You have</h3>
  </div>
  <div class="panel-body">
    <p><i class="fa fa-book"></i> <a href="index.php?page=studentinfo"> <strong><?php print $noOfSubject; ?></strong> Subjects </a></p>
		<?php
			$studentQuery = "SELECT COUNT(DISTINCT sid) as student_count FROM `faculty_subject` INNER JOIN student_subject WHERE faculty_subject.id = student_subject.id AND faculty_subject.uid = $facultyId";
			$stmtStudent = $conn->prepare($studentQuery); 
			$stmtStudent->execute();
			$resultStudent = $stmtStudent->fetchAll(PDO::FETCH_ASSOC); 
		?>
		
		<?php if(!empty($resultStudent)) : ?>
			<p><i class="fa fa-users"></i> <a href="index.php?page=studentinfo"><strong><?php print $resultStudent[0]['student_count'] ?></strong> Students</a></p>
		<?php else: ?>
			<p><i class="fa fa-users"></i> No Students assigned to you!</p>
		<?php endif; ?>
  </div>
</div>