<?php
session_start();
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
         $adharno=($_POST['adharno'] ); 

         $cardno=($_POST['cardno'] ); 
         
         $cardholder=($_POST['cardholder'] );

         $cvv=($_POST['cvv'] ); 
         
         $expiredate=($_POST['expiredate'] ); 

         $membership=($_POST['dropdown'] );

         $startdatemember=date("Y-m-d");

         $a="sixmonth"; $b="fouryear";  $c="tenyear";
         //cheaking date 
         if($membership == $a)
         {
           
        
         $enddatemember=date("Y-m-d",strtotime("6 month")); 
		   $amount=700;
          }
        
          else if($membership == $b)
         {
           
         $enddatemember=date("Y-m-d",strtotime("4 Year")); 
		   $amount=1500;

         }
        
           else
         {
           
         $enddatemember= date("Y-m-d",strtotime("10 Year")); 
		   $amount=2500;
		 

         }
		 $email=($_SESSION['emailid']);
        
           //Error handlers
           // check for empty fileds

     if(!empty($adharno) && !empty($cardno) && !empty($cardholder) && !empty($cvv) && !empty($expiredate) 
      && !empty($startdatemember) && !empty($enddatemember) && !empty($membership) && !empty($email) && !empty($amount))
     {
                     
					//expire date validation
		     if(!(date('Y-m-d',strtotime($expiredate)) == $expiredate))
             {
               
			   $error=true;
            echo "<script type='text/javascript'>alert('Expire date formate is Incorrect,Please enter valid format of expire date!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";

              } 
					 
					 
					 
					   //adhar no validation
                 if( (strlen($adharno) != 12)   )
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Adhar number must contain 12 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$adharno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Adhar Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          } 
		  //card number validation
		    if(strlen($cardno) != 16)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Card number must contain 16 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$cardno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Card Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }     
         
		      //cardholder validation
			   if(strlen($cardholder)<4)
          {    
            $error=true;
            echo "<script type='text/javascript'>alert('Card holder must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$cardholder))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Card holder must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }
         
		    //cvv validation
                 if(strlen($cvv) != 3)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('CVV number must contain 3 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$cvv))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('CVV Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
          } 



            if(!$error)
         {
         

        
              $query="INSERT INTO  `sm`.`debitmembership` (
`adharno` ,
`cardno` ,
`cardholder` ,
`cvv` ,
`expiredate` ,
`startdatemember` ,
`enddatemember`,
`membership`,
`email`,
`amount`
)
VALUES (
  '$adharno',  '$cardno',  '$cardholder',  '$cvv',  '$expiredate',  '$startdatemember',
    '$enddatemember','$membership','$email','$amount')";




                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('YOU BUY MEMBERSHIP  WAS DONE SEUCCESFULLY!')
                         </script>";
                        $_SESSION['adharnooo']=$adharno;
                         
                echo "<script language='javascript' type='text/javascript'>location.href='reciptprint.php'
               </script>";


                        }
                     else
                        echo "query not executed";
      
            
             }

             






           }
     else 
         
	 {
         echo "<script type='text/javascript'>alert('Fields are not Empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='debit.php'
               </script>";
        }     
}
else
        echo "not insert";


?>




