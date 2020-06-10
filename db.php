<?php
    $servername='localhost:3308';
    $username='root';
    $password='';
    $dbname = 'sg_personal_finance' ;
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if($conn){
		  echo 'The database successfully connected!';
		  echo "<br><br>";
	  }
		  else {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>