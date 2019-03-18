<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Print Agreement/Biometric Verification Appointment</title>
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

.block{
 width:750px;
  height:700px;
  background:#001e2d;
  box-sizing:border-box;
  color:#FFFFCC;
  box-shadow:10px 10px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
  padding:30px;
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
    <li> <a href="logout.php" >Logout</a></li>
</ul>

<br/><br/><br/><br/><br/><br/>
<center>
<div  class="block">
<h1>Print / Save  Agreement Draft</h1>
<h3>Kindly save this draft before booking an appointment for your reference</h3>
<center>
<a href="printagreement.php" style="padding-left:20px; padding-right:20px; padding-top:3px; padding-bottom:6px; color:#000000; background:#999999; ">Print/Save</a>
</center>
<br/>
<h1>Payment</h1>
Total charges : 3000Rs<br/>
Payment will be accepted online before biometric verification
<br/><br/>
<a href="agreemcredit.php" style="padding-left:20px; padding-right:20px; padding-top:3px; padding-bottom:6px; color:#000000; background:#999999; ">Credit Card</a>
<a href="agreemdebit.php" style="padding-left:20px; padding-right:20px; padding-top:3px; padding-bottom:6px; color:#000000; background:#999999; ">Debit Card</a>

</div>
</center>
<br/><br/><br/>
<br/><br/>
</body>
</html>
