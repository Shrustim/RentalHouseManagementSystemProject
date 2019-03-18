
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>rental house managment system</title>
<style>
body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: italic;
	background-color:#FFFF00;
	color:#000000;
	text-shadow: 5px 5px 11px #CC0000;
}

.boxx
    {
      position: absolute;
      
      transform: translate(-50%,-50%);
      width: 267px;
      height: 70px;
      text-align: center;
      line-height: 60px;
      color: #fff;
      font-size: 24px;
      text-transform:uppercase;
      text-decoration: none;
      font-family: sans-serif;
      box-sizing: border-box;
      background: linear-gradient(175deg,#999999,#CCCCCC,#000033,#000066);
      background-size: 400%;
      border-radius: 60px;

       }
       
       
        .boxx:hover
        {
          
         background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 400%;
      border-radius: 40px;
      color: #000000;
           }
          


   
  .box{
  position:absolute;
  top:80%;
  left:50%;
  transform: translate(-50%,-50%);
  width:650px;
  height:650px;
  background:#001e2d;
  box-sizing:border-box;
  overflow:hidden;
  box-shadow:10px 10px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
  }
  .box:before
  {
  content:'';
  position:absolute;
  top:0;
  left:-100;
  width:100%;
  height:100%;
  background:rgba(255,255,255,.1);
  transition:0.5s;
  pointer-events:none;
  }
  .box:hover:before{
  left:-50%;
  transform:skewX(-5deg);
  }
  .box span
  {
  position:absolute;
  top:0;
  left0;
  width:100%;
  height:100%;
  display:block;
  box-sizing:border-box;
  }
 
  .box span:nth-child(1)
  {
   transform:rotate(0deg);
   
  }
  .box span:nth-child(2)
  {
   transform:rotate(90deg);
   
  }
  .box span:nth-child(3)
  {
   transform:rotate(180deg);
   
  }
  .box span:nth-child(4)
  {
   transform:rotate(270deg);
   
  }
  .box span:nth-child(2):before
  {
   animation-delay:-2s;
  }
  .box span:nth-child(4):before
  {
   animation-delay:-2s;
  }
  
  .box span:before
  {
  content:'';
  position:absolute;
  width:100%;
  height:2px;
  background:#0093ff;
  animation:animate 4s linear infinite;
  }
  @keyframes animate
  {
    0%{
	transform: scaleX(0);
	transform-origin:left;
	}

    50%{
	transform: scaleX(1);
	transform-origin:left;
	}

    50.1%{
	transform: scaleX(1);
	transform-origin:right;
	}
    100%{
	transform: scaleX(0);
	transform-origin:right;
	}
}	
 
   .box .content
  {
	position:absolute;
	top:15px;
	left:15px;
	right:15px;
	bottom:15px;
	border:3px solid #ffeb3b;
	padding:10px;
	
	
	box-shadow: 0 5px 10px rgba(0,0,0,.5);
	
  }
  
   
 



</style>
</head>

<body>
   <h1 class="style1" align="center" ><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   
   </h1>
      
     
<center>
	<div style="box-shadow: 0 5px 10px white;">
	        
			<a href="rent.php"><h1  class="boxx"  style="top:19%;
			left:10%;">HOME</h1></a>
			
			<a href="profile.php"><h1  class="boxx"  style="top:19%;
			left:30%;">profile</h1></a>
    
         <a href="owner.php"><h1  class="boxx"  style="top:19%;
			left:50%;">owner</h1></a>
    
	  <a href="tenant.php"><h1  class="boxx"  style="top:19%;
			left:70%;">tenant</h1></a>
    
	 
			
			<a href="logout.php"><h1  class="boxx"  style="top:19%;
			left:90%;">logout</h1></a>
			
		
    </div>
</center>	
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



?>
<br/><br/>
<br/>
<br/><br/>
<div class="box">
	   <span></span>
	   <span></span>
	   <span></span>
	   <span></span>
	    
	 <div class="content">
 <br/>
<h1 align="center"  style="color:#FFFFFF;" > <i><u>PROFILE</u></i></h1>
  <?php      
 $query=" SELECT * 
FROM  `users` 
WHERE email ='$useremail'";
$data=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($data))
{
echo '<center><img src="'.$row['picsourc'].'" width="350px" height="250px" /></center>';

echo '<h2  style="padding-left:70px; color:#FFFF99;">
<font style=" color:#FF9999;">Name:</font>
<font style="padding-left:20px;">'.$row['firstnm'].'</font>
 <font style="padding-left:10px;">'.$row['middlenm'].'</font>
  <font style="padding-left:10px;">'.$row['lastnm'].'</font>'.
'<br/>'. 
'<font style=" color:#FF9999;">Customer ID:</font>
<font style="padding-left:10px;">'.$row['id'].'</font>

<font style=" color:#FF9999; padding-left:5px;">Age:</font>
<font style="padding-left:5px;">'.$row['age'].'</font><br/>
<font style=" color:#FF9999;">Email:</font>
<font style="padding-left:20px;">'.$row['email'].'</font><br/>
<font style=" color:#FF9999;">Mobile No:</font>
<font style="padding-left:20px;">'.$row['mobileno'].'</font> <br/>
<font style=" color:#FF9999;">Address:</font>
<font style="padding-left:20px; padding-right:40px; ">'.$row['address'].'</font><br/>
<font style=" color:#FF9999;">Occupation:</font>
<font style="padding-left:20px;">'.$row['occupation'].'
</h2>';
//occupation
//picsourc
}   
  
 ?>

</div>
</div>

 

</body>
</html>


