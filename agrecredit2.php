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

         $propertype=($_POST['dropdown1'] );
		 $address=($_POST['address']);
		 $appointdate=($_POST['appointdate']);
		 $dropdown2=($_POST['dropdown2']);
		 $novisits=($_POST['novisits']);
		 
		 
		  if(!empty($adharno) && !empty($cardno) && !empty($cardholder) && !empty($cvv) && !empty($expiredate) 
      && !empty($propertype) && !empty($address) && !empty($appointdate) && !empty($dropdown2) && !empty($novisits))
     {  
	   //expire date validation
		     if(!(date('Y-m-d',strtotime($expiredate)) == $expiredate))
             {
               
			   $error=true;
            echo "<script type='text/javascript'>alert('Expire date formate is Incorrect,Please enter valid format of expire date!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";

              }
			  
			  // Appointment date validation
		     if(!(date('Y-m-d',strtotime($appointdate)) == $appointdate))
             {
               
			   $error=true;
            echo "<script type='text/javascript'>alert('Appointment date formate is Incorrect,Please enter valid format of appointment date!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";

              }

	  if(strlen($cardholder)<4)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Cardholder must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$cardholder))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Cardholder must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
		  
		    //adhar no validation
                 if(strlen($adharno) != 12)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Adhar number must contain 12 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$adharno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Adhar Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
		   
		  //card number validation
		    if(strlen($cardno) != 16)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Card number must contain 16 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$cardno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Card Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }    
		  
		   //cvv validation
                 if(strlen($cvv) != 3)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('CVV number must contain 3 numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
          else 
               if(!preg_match("/^[0-9]+$/",$cvv))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('CVV Number must contain number!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          } 
 
           //address validation
		    if(strlen($address)<15)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Address must have atlaest 15 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }
		  
		  
		  //novisits validation
		   if(!preg_match("/^[0-9]+$/",$novisits))
          {
             $error=true;
            echo "<script type='text/javascript'>alert('mobile number must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
          }


         if(!$error)
         {
	 $query="INSERT INTO  `sm`.`agreemcredit` (
`adharno` ,
`cardno` ,
`cardholder` ,
`cvv` ,
`expiredate` ,
`propertytype` ,
`address` ,
`appointdate` ,
`preferedtime` ,
`novisits`
)
VALUES (
'$adharno',  '$cardno',  '$cardholder',  '$cvv',  '$expiredate',  '$propertype',  '$address',  ' $appointdate',  '$dropdown2',  '$novisits')";


                   if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
						  session_start();
                         $_SESSION['adhar']=$adharno;
                       
                echo "<script language='javascript' type='text/javascript'>location.href='printappointment.php'
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

                echo "<script language='javascript' type='text/javascript'>location.href='agreemcredit.php'
               </script>";
        }     
}
else
        echo "not insert";


?>