

<?php

     include 'includes/dbconnection.php';
     if(isset($_POST['submit']))
     {
         $nm=$_POST['rollno'];
       
        $pass=$_POST['pass'];
        if( isset($nm) && isset($pass))
      {
        if(!empty($nm) && !empty($pass) )
        {

          $stmt = $conn->prepare("SELECT * FROM student WHERE rollno= ? AND pass=?"); 
            $stmt->execute(array($nm,$pass));

             
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              // print_r($result);
            if(count($result))
            {
            
            $uid = $result[0]['sid'];
						$rollno = $result[0]['rollno'];
						session_start();
            // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
            
                $_SESSION['islogin'] ="1";
                $_SESSION['rollno'] =$nm;
								$_SESSION['uid'] = $uid;
								$_SESSION['rollno'] = $rollno;
            
                echo '<script>alert("Login successfully");location.href="studentdata.php";</script>';
            }
            else
            {
              echo '<script>alert("Incorrect Roll no or password");location.href="students_login.php";</script>';
            }
            
            
          }
         
        }
      }

?>