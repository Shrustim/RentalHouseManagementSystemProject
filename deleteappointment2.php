<?php

 session_start();
include_once 'connt.php';

$name=$_SESSION['name'];
if($name==true)
{
#echo '<font color="#FFFFFF">'."Welcome".$useremail.'</font>';
}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='admin.php'
               </script>";
			  
}

$id=$_GET['id'];
$query="DELETE FROM `agreemdebit`  WHERE id='$id' ";

if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('Deleted Appointment Sucssesfully')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='appointinfo.php'
               </script>";


                        }
                     else
					 {
                        echo "<script type='text/javascript'>alert('Deleted record is Failed')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='appointinfo.php'
               </script>";
                       }

?>