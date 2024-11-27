<?php

	$databaseHost = 'localhost';
	$databaseName = 'attendancemaster';
	$databaseUsername = 'root';
	$databasePassword = '';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//mysqli connection for simple connections
?>
<?php
    $host = "localhost"; //on same server we keep localhost
    $user = "root";  //username of the databaseid13311789_jaydip
    $pass = "";   //password of the databaseJaydip@1234567890
    $db = "attendancemaster";  //name of database
    
    $connect = mysqli_connect($host,$user,$pass,$db);
     if($connect){
       
    }
    else{
        echo "Failed to connect ".mysqli_connect_error();
    }
?>