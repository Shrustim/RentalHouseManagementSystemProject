 <?php
include_once 'connt.php';


if(isset($_POST['Submit']))
{
           $lastnm=($_POST['lastnm'] );              
		   $firstnm=($_POST['firstnm'] );
		   $age=($_POST['age'] );
		   $uidadharno=($_POST['adharno'] );
		   $pan=($_POST['pan'] );
		   $gender=($_POST['subject'] );
		   $mobileno=($_POST['mobno'] );
		   $emailid=($_POST['email'] );
		   $buildnm=($_POST['buildingnm'] );
		   $flatno=($_POST['flatno'] );
		   $roadsector=($_POST['sector'] );
		   $location=($_POST['location'] );
		   $villagecity=($_POST['city'] );
		   $pin=($_POST['pin'] ); 
		   
		   $tlastnm=($_POST['tlastnm'] );
		   $tfirstnm=($_POST['tfirstnm'] );
		   $tage=($_POST['tage'] );
		   $tuidadharno=($_POST['tadharno'] );
		   $tpan=($_POST['tpan'] );
		   $tgender=($_POST['tsubject'] );
		   $tmobileno=($_POST['tmobno'] );
		   $temailid=($_POST['temail'] );
		   $tbuildnm=($_POST['tbuildingnm'] );
		   $tflatno=($_POST['tflatno'] );
		   $troadsector=($_POST['tsector'] );
		   $tlocation=($_POST['tlocation'] );
		   $tvillagecity=($_POST['tcity'] );
		   $tpin=($_POST['tpin'] ); 
		   
		     $a=($_POST['propertytype'] );
			 $b=($_POST['areasqft'] );
			 $c=($_POST['plotsurveyno'] );
			 $d=($_POST['spno'] );
			 $e=($_POST['propertyusage'] );
			 $f=($_POST['pbuildingnm'] );
			 $g=($_POST['pflatno'] );
			 $h=($_POST['pfloorno'] );
			 $i=($_POST['psector'] );
		     $j=($_POST['plocation'] );
			 $k=($_POST['pcity'] );
			 $l=($_POST['ppin'] );
			 $m=($_POST['fan'] );
			 $n=($_POST['bed'] );
			 $o=($_POST['sofa'] );
			 $p=($_POST['ac'] );
			 $q=($_POST['washingmachine'] );
			 $r=($_POST['gyeser'] );
			 $s=($_POST['cupboard'] );
			 $t=($_POST['watercooler'] );
			 $u=($_POST['table'] );
		   
		    $v=($_POST['montlyrent'] );
			$w=($_POST['month'] );
			$x=($_POST['depositeamount'] );
			$y=($_POST['modedeposite'] );
			$z=($_POST['startdate'] );
			$aa=($_POST['lockinperiod'] );
			$bb=($_POST['registrationpaidby'] );
			
			$clauses="Clean Property Handover";
			//($_POST['clauses'] );
			  
	           if(!empty($lastnm) && !empty($firstnm)  && !empty($age)  && !empty($uidadharno)  && !empty($pan) && !empty($gender) && !empty($mobileno) && !empty($emailid)  && 
				!empty($buildnm)  && !empty($flatno) && !empty($roadsector)  && !empty($location) && !empty($villagecity) && !empty($pin) &&
				!empty($tlastnm) && !empty($tfirstnm)  && !empty($tage)  && !empty($tuidadharno)  && !empty($tpan) && !empty($tgender) && !empty($tmobileno) && !empty($temailid)                     && !empty($tbuildnm)  && !empty($tflatno) && !empty($troadsector)  && !empty($tlocation) && !empty($tvillagecity) && !empty($tpin))
				{
			   
	                if( !empty($a) && !empty($b) && !empty($c) && !empty($d) && !empty($e) && !empty($f) && !empty($g)
				&& !empty($h) && !empty($i) && !empty($j) && !empty($k) && !empty($l)   
				    && !empty($v) && !empty($w) && 
				!empty($x) && !empty($y) && !empty($z)  && !empty($aa) && !empty($bb) && !empty($clauses))
				{	
                 
				 
				 //starting date validation
		     if(!(date('Y-m-d',strtotime($z)) == $z))
             {
               
			   $error=true;
            echo "<script type='text/javascript'>alert('starting date formate is Incorrect,Please enter valid format of Starting date!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               

              }
             
			     if(strlen($lastnm)<4)
          {   //basic firstname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Lastname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$lastnm))
          {   //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Lastname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			
			
			  if(strlen($firstnm)<4)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Firstname must have atlaest 4 characters! To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$firstnm))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Firstname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			 //check age
			 if(!preg_match("/^[0-9]+$/",$age))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Age  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }

			 //adhar no validation
                 if(strlen($uidadharno) != 12)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Adhar number must contain 12 numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
          else 
               if(!preg_match("/^[0-9]+$/",$uidadharno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Adhar Number must contain number!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          } 
			 //pan no validation
                 if(strlen($pan) != 10)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Pan number must contain 10 numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
		  
		  //check mobile no
			 if(!preg_match("/^[0-9]+$/",$mobileno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Mobile no  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  //Check  validation of email
		   if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
          {     
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards please enter valid email address!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
		  
		  //building nm validation
		   if(strlen($buildnm)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Buildname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$buildnm))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Buildname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			
			//check flat no
			 if(!preg_match("/^[0-9]+$/",$flatno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Flat No  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		   //roadsector validation
		   if(strlen($roadsector)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Road or sector must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
			
			//location validation
			 if(strlen($location)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards location must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$location))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards location must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//villagecity validation
			if(strlen($villagecity)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Lanloards village or city must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$villagecity))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards village or city must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//check pin no
			 if(!preg_match("/^[0-9]+$/",$pin))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Lanloards Pin  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  
		  
		  
		  if(strlen($tlastnm)<4)
          {   //basic firstname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Tenant Lastname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else
               if(!preg_match("/^[a-z A-Z]+$/",$tlastnm))
          {   //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Lastname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			
			
			  if(strlen($tfirstnm)<4)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants Firstname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$tfirstnm))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Firstname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			 //check age
			 if(!preg_match("/^[0-9]+$/",$tage))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Age  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }

			 //adhar no validation
                 if(strlen($tuidadharno) != 12)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants Adhar number must contain 12 numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
          else 
               if(!preg_match("/^[0-9]+$/",$tuidadharno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Adhar Number must contain number!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          } 
			 //pan no validation
                 if(strlen($tpan) != 10)
          {  
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants Pan number must contain 10 numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
		  
		  //check mobile no
			 if(!preg_match("/^[0-9]+$/",$tmobileno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants mobile no  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  //Check  validation of email
		   if(!filter_var($temailid,FILTER_VALIDATE_EMAIL))
          {     
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants please enter valid email address!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

               
          }
		  
		  //building nm validation
		   if(strlen($tbuildnm)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants Buildname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$tbuildnm))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Buildname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			
			//check flat no
			 if(!preg_match("/^[0-9]+$/",$tflatno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Flat No  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		   //roadsector validation
		   if(strlen($troadsector)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants Road or sector must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
			
			//location validation
			 if(strlen($tlocation)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants location must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$tlocation))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants location must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//villagecity validation
			if(strlen($tvillagecity)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Tenants village or city must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$tvillagecity))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants village or city must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//check tpin no
			 if(!preg_match("/^[0-9]+$/",$tpin))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Tenants Pin  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  
		  //check area in sqft no
			 if(!preg_match("/^[0-9]+$/",$b))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In property details area in sq.ft.  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		   //check plotno
			 if(!preg_match("/^[0-9]+$/",$d))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In property details Plot no / survey no  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		   //building nm validation
		   if(strlen($f)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('In property details Buildname must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$f))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('In property details Buildname must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			
			//check flat no
			 if(!preg_match("/^[0-9]+$/",$g))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In property details Flat No  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  //check floor no
			 if(!preg_match("/^[0-9]+$/",$h))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In property details Floor No  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		   //roadsector validation
		   if(strlen($i)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('In property details Road or sector must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
			
			//location validation
			 if(strlen($j)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('In property details location must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$j))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('In property details location must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//villagecity validation
			if(strlen($k)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('In property details village or city must have atlaest 4 characters!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";
            }
               
           else 
               if(!preg_match("/^[a-z A-Z]+$/",$k))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('In property details village or city must contain alphabets!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

            }
			//check tpin no
			 if(!preg_match("/^[0-9]+$/",$l))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In property details Pin  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  // Monthly rent
		  
		   if(!preg_match("/^[0-9]+$/",$v))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In Agreement details Monthly rent  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  //Total Duration in Months
		   if(!preg_match("/^[0-9]+$/",$w))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In Agreement details Total Duration in Months   must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  //Deposite Amount
		   if(!preg_match("/^[0-9]+$/",$x))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In Agreement details Deposite Amount  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  
		   // Lock-in Period
		  
		   if(!preg_match("/^[0-9]+$/",$aa))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('In Agreement details Lock-in Period  must contain numbers!To GO BACK CLICK ON BACK ARROW OF YOUR BROWSER')
               </script>";

                
          }
		  
		  
			  if(!$error)
         {

            $query="INSERT INTO `sm`.`agreementofflat` (`llastnm`, `lfirstnm`, `lage`, `ladharno`, `lpan`, `lgender`, `lmobileno`, `lemailid`, `lbuildnm`, `lflatno`, `lroadsector`, `llocation`, `lcityvillage`, `lpincode`, `tlastnm`, `tfirstnm`, `tage`, `tadharno`, `tpan`, `tgender`, `tmobileno`, `temailid`, `tbuildnm`, `tflatno`, `troadsector`, `tlocation`, `tocation`, `tpincode`, `propertytype`, `areasqft`, `plotnooo`, `plotno`, `propertyusage`, `buildnm`, `flatno`, `floorno`, `roadsector`, `location`, `villagecity`, `pincode`, `fan`, `ac`, `cupbooard`, `bed`, `washingmachine`, `watercooler`, `sofa`, `gyser`, `table`, `montlyrent`, `totalduraton`, `depositeamount`, `modeofdeposite`, `startdate`, `lockinperiod`, `registrationcharges`,`clauses`)
			
			 VALUES ( '$lastnm', '$firstnm', '$age', '$uidadharno', '$pan', '$gender', '$mobileno', '$emailid', '$buildnm', '$flatno', '$roadsector', '$location', '$villagecity', '$pin',   '$tlastnm', '$tfirstnm', '$tage', '$tuidadharno', '$tpan', '$tgender', '$tmobileno', '$temailid', '$tbuildnm', '$tflatno', '$troadsector', '$tlocation', '$tvillagecity', '$tpin','$a', '$b','$c','$d','$e','$f','$g','$h', '$i','$j','$k','$l','$m','$p','$s','$n','$q','$t','$o','$r','$u','$v','$w','$x','$y','$z','$aa','$bb','$clauses')	";






                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('YOUR REGESTRATION WAS DONE SEUCCESFULLY! 
                          WELCOME TO RENTAL HOUSE MANAGEMENT SYSTEM. Now you LOGIN.')
                         </script>";
						  session_start();
						 $_SESSION['emailflat']=$emailid;

                         echo "<script language='javascript' type='text/javascript'>location.href='biometricappoint.php'
               </script>";


                        }
                     else
                        echo "query not executed";
                  }
		    }
     else
	  {
          //echo "filds not empty";
		  echo "<script type='text/javascript'>alert('Filds are not Empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreementformflat.php'
               </script>";
           }		
			
          }
     else
	  {
          //echo "filds not empty";
		  echo "<script type='text/javascript'>alert('Filds are not Empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='agreementformflat.php'
               </script>";
           }		
}
else
        echo "not insert";


?>
