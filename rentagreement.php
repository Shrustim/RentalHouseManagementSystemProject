<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registered rent agreement</title>
<style>
body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
  
  
  ul{
margin:0px;
padding:0px;
}
ul li{
background: linear-gradient(175deg,#999999,#CCCCCC,#000033,#000066);
background-size: 350%;
border-radius: 60px;
width:280px;
height:70px;
box-sizing: border-box;
line-height:55px;
float:left;
text-align:center;
list-style:none;}

ul li a{
color:#FFFFFF;
text-decoration:none;
    font-size: 24px;
     
	   font-family: sans-serif;
	   display:block;
}
ul li a:hover
{
         background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 300%;
      border-radius: 60px;
      color: #000000;
	  width:280px;
height:70px;
	  
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}

 .style1 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-weight: bold;
  font-style: italic;
  background-color:#FFFF00;
  color:#000000;
  text-shadow: 5px 5px 11px #CC0000;
}
 .block
  {
  float:left;
  width:25%;
  color:#FFFF99;
  background-color:#330000;
  border-color:#000000;
  margin-left:80px;
  border:9px solid #000000;
  padding:15px;
  box-sizing:border-box;
   }

.block2
{
margin-left:220px;
float:left;
color:#FFFFFF;

}

  </style>
</head>

<body>
 <?php
  session_start();
include_once 'connt.php';

  

 
$useremail=$_SESSION['emailid'];
if($useremail==true)
{

}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
			  
}

?>
<div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div> 
<ul>
   <li> <a href="rent.php">Home</a></li>
   <li> <a href="rentagreement.php" ><font style="font-size:21px;">Registered Rent Agreement</font></a></li>  
    <li> <a href="logout.php" >Logout</a></li>
</ul>
<br/><br/><br/><br/><br/><br/>
<center>
<div class="block">
 <h2>Easy Online Form</h2>
 <p>
  Fill an online Form Anytime Anywhere.Get Sample Copy also.
 </p>
 </div>

<div class="block">
 <h2>Schedule An Appointment</h2>
 <p>
 Schedule An Appointment For Bio Metric Verification As Per
 Your Convenience.
 </p>
 </div>
 
 <div class="block" >
 <h2>Get Registered Agreement</h2>
 <p>
 Get Registered Agreement<br/><br/>
 
  </p>
 </div>
 
 </center>
 <br/>
 <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 <center><a href="agreementformhouse.php" style="background-color:#333333; color:#FFFFFF; font-size:25px; border:medium; 
 border-color:#FFFFFF; border-radius:30px; padding:13px; padding-bottom:15px; margin-right:5px; "> 
 Create Agreement for House </a> 
 <a href="agreementformflat.php" style="background-color:#333333; color:#FFFFFF; font-size:25px; border:medium; 
 border-color:#FFFFFF; border-radius:30px; padding:13px; padding-bottom:15px; "> 
Create Agreement for Flat</a>
 <a href="agreementformshop.php" style="background-color:#333333; color:#FFFFFF; font-size:25px; border:medium; 
 border-color:#FFFFFF; border-radius:30px; padding:13px; padding-bottom:15px; "> 
 Create Agreement for Shop/Godown</a>
 </center>
 <br/><br/><br/><br/>
 

 
  <div class="block2">
 <h2> Easy Process</h2>
 <p>
 1.Fill an online form .you can add additional<br/> clauses,if required
 <br/>
 2.Once a draft is ready ,book an appointment<br/> for your biometric verification
 <br/>
 3.Get an Registered Agreement 
 </p>
 </div>
 
 <div class="block2">
 <h2> FAQs</h2>
 <p> <font style="font-size:20px;"> Which document are required?</font>
 <br/>
 Adhar number and PAN number of all parties(Landloard & Tenant)
 <br/>
 <font style="font-size:20px;"> 
 Do I need to go registration office?</font>
 <br/>
 Not at all. Whole process will be done sitting at home</p>
 </div>
 
 
 

</body>
</html>
