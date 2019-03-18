<?php
include_once 'connt.php';

if(isset($_POST['submit']))
{

    $fnm=($_POST['firstnm'] ); 
	 $lnm=($_POST['lastnm'] );
	  $email=($_POST['email'] ); 
     $mobno=($_POST['mobno'] );
	  $message=( $_POST['message'] ); 
		 
		  if(!empty($fnm) && !empty($lnm) && !empty($email) && !empty($mobno) && !empty($message))
		  {
		           // firstname validation
		          if(strlen($fnm)<4)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Firstname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$fnm))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Firstname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }
		  
		           // firstname validation
		          if(strlen($lnm)<4)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Lastname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$lnm))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Lastname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }
		  
		  
		     //Check  validation of email
		    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {    
             $error=true;
            echo "<script type='text/javascript'>alert('please enter valid email address!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }
		  
		     //mobile no validation
			 if(!preg_match("/^[0-9]+$/",$mobno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('mobile number must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
          }

			 
		    
              if(!$error)
			  {		  
 		     $query="INSERT INTO  `sm`.`help` (
              `firstnm` ,
              
               `lastnm` ,
              `email` ,
			  `mobno` ,
			  `message`
			  )
                VALUES ( '$fnm',   '$lnm',  '$email',  '$mobno','$message'  )";
				
				 if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          

                         echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";


                        }
                     else
                        echo "query not executed";
               }
 
           
		  }
		  else 
		  {
		  echo "<script type='text/javascript'>alert('Filds are not Empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='help.php'
               </script>";
			   }
        

}