<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$dbname="sm";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$dbname);
if($conn)
  { 
  
  //echo 'connection success';
  
  }
   
   else
   {
    
  die('cannot connect to database sm');
    }

?>


