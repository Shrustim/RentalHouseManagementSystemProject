<?php
session_start();
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
         
         $name=($_POST['name'] ); 
         
         $pass=($_POST['pass'] ); 
         
         

           //Error handlers
           // check for empty fileds

     if( !empty($name) && !empty($pass) )
     {
         

              $query="SELECT * FROM  `admin` WHERE name =  '$name'  && password =  '$pass' ";





           $data=mysqli_query($conn,$query);
            $count=mysqli_num_rows($data);
           if($count==1)
           {  
              $_SESSION['name']=$name;
             
               echo "<script language='javascript' type='text/javascript'>location.href='adminb.php'
               </script>";
           }
           else
           {
             echo "<script type='text/javascript'>alert('Login Failed!')
               </script>";


                echo "<script language='javascript' type='text/javascript'>location.href='admin.php'
               </script>";

           }
            


             






           }
     else 
	 {
           echo "<script type='text/javascript'>alert('fields are not empty!')
               </script>";
			   
			   
                echo "<script language='javascript' type='text/javascript'>location.href='admin.php'
               </script>";
			   }

}
else
        echo "not insert";


?>
