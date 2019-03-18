<?php
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
         $fnm=($_POST['fname'] ); 

         $midnm=($_POST['mname'] ); 
         
         $lnm=($_POST['lname'] );
         
         $dob= ($_POST['age'] ); 
         
         $email=($_POST['email'] ); 
         
         $mobno=($_POST['mobile'] ); 
         
         $gender=($_POST['subject'] ); 
         
         $add=($_POST['address'] ); 

         $occu=($_POST['occupation']);
         
         $pass=($_POST['pass'] ); 
         
         $passo=($_POST['pass1'] ); 

           $filesname=($_FILES["uploadfile"]["name"]);
           $tempname=($_FILES["uploadfile"]["tmp_name"]);
           $folder="users/". $filesname;
          
          
           move_uploaded_file($tempname, $folder);

           //Error handlers
           // check for empty fileds

     if(!empty($fnm) && !empty($midnm) && !empty($lnm) && !empty($dob) && !empty($email) && !empty($mobno) && 
      !empty($gender) && !empty($add) && !empty($occu) && !empty($pass) && !empty($passo) && !empty($folder))
     {

          if(strlen($fnm)<4)
          {   //basic firstname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Firstname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$fnm))
          {   //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Firstname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }



          if(strlen($midnm)<4)
          {    //basic middlename validation
            $error=true;
            echo "<script type='text/javascript'>alert('Middlename must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$midnm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Middlename must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }


           if(strlen($lnm)<4)
          {    //basic lastname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Lastname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$lnm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Lastname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }

   
          if(!preg_match("/^[0-9]+$/",$mobno))
          {  //check numbers or not
             $error=true;
            echo "<script type='text/javascript'>alert('mobile number must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }


          if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {     //Check  validation of email
             $error=true;
            echo "<script type='text/javascript'>alert('please enter valid email address!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }
          else
          {    // Check email exit or not
            $query="SELECT email FROM  `demooner` WHERE email =  '$email'";
           $data=mysqli_query($conn,$query);
            $count=mysqli_num_rows($data);
            if($count!=0)
            {
              $error=true;
            echo "<script type='text/javascript'>alert('please enter valid email address!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";

            }
          

          }


          

          if($pass!==$passo)
          {  //check password matching or not
            $error=true;
            echo "<script type='text/javascript'>alert('Password does not  Match!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";

          }
          else
          {  
             if(strlen($pass)<6)
             {    
               $error=true;
               echo "<script type='text/javascript'>alert('password must have atlaest 6 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";

              }
         
           }
		   
		   
		   //address validation
		    if(strlen($add)<15)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Address must have atlaest 15 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
          }

          if(!$error)
         {

              $query="INSERT INTO  `sm`.`users` (
              `firstnm` ,
              `middlenm` ,
               `lastnm` ,
              `age` ,
              `email` ,
               `mobileno` ,
               `gender` ,
               `address` ,
                `occupation` ,
                 `password1` ,
                `password2` ,
                 `picsourc`
                 )
                VALUES ( '$fnm',  '$midnm',  '$lnm',  '$dob',  '$email',  '$mobno',  '$gender',  '$add',
                  '$occu',  '$pass',  '$passo','$folder')";






                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('YOUR REGESTRATION WAS DONE SEUCCESFULLY! 
                          WELCOME TO RENTAL HOUSE MANAGEMENT SYSTEM. Now you LOGIN.')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";


                        }
                     else
                        echo "query not executed";
      
            


             }






           }
     else {
          //echo "filds not empty";
		  echo "<script type='text/javascript'>alert('Filds are not Empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='a.php'
               </script>";
           }
}
else
        echo "not insert";


?>
