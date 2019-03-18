<?php
 session_start();
include_once 'connt.php';

$useremail=$_SESSION['emailid'];
if($useremail==true)
{
#echo '<font color="#FFFFFF">'."Welcome".$useremail.'</font>';
}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
			  
}
$id=$_GET['id'];
//echo $id;

$query="DELETE FROM `flatlist`  WHERE id='$id' ";

if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('Deleted Flat Sucssesfully')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='listflat.php'
               </script>";


                        }
                     else
					 {
                        echo "<script type='text/javascript'>alert('Deleted record is Failed')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='listflat.php'
               </script>";
                       }


?>
