<?php
session_start();
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
         
         $email=($_POST['email'] ); 
         
         $pass=($_POST['pass'] ); 
         
         

           //Error handlers
           // check for empty fileds

     if( !empty($email) && !empty($pass) )
     {
         

              $query="SELECT * FROM  `users` WHERE email =  '$email'  && password1 =  '$pass' ";





           $data=mysqli_query($conn,$query);
            $count=mysqli_num_rows($data);
           if($count==1)
           {  
              $_SESSION['emailid']=$email;
             
               echo "<script language='javascript' type='text/javascript'>location.href='rent.php'
               </script>";
           }
           else
           {
             echo "<script type='text/javascript'>alert('Login Failed!')
               </script>";


                echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";

           }
            


             






           }
     else 
         {
           echo "<script type='text/javascript'>alert('fields are not empty!')
               </script>";
			   
			   
                echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
			   }

}
else
        echo "not insert";


?>
