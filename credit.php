<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment option credit card</title>
</head>

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
.box{
  position:absolute;
  top:80%;
  left:50%;
  transform: translate(-50%,-50%);
  width:550px;
  height:620px;
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
	padding:20px;
	
	box-shadow: 0 5px 10px rgba(0,0,0,.5);
	
  }
  .box .content h1
  { 
  text-align:center;
    color:#fff;

  margin:0,0,10px;
  padding:0;
  } 
  .box .content h4
  {
  color:#fff;
  font-size:20px;
  margin:0,0,10px;
  padding:0;
  }
  .box .content p
  {
  color:#fff;
  }
 .box .content label
 {
 display:block;

 }
 .button{
 width:30%;
 height:30px;
 font-size:18px;

 }
 
  .button:hover{
  background:#FF0066;
   color:#FFFFFF;
  }
  </style>

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

<center><font color="#FFFFCC"><h1>Payment Option</h1></font></center>




    <div class="box">
	   <span></span>
	   <span></span>
	   <span></span>
	   <span></span>
	   
 <div class="content">
	  <h1 style="text-shadow:5px 5px 9px yellow;">CREDIT CARD</h1> 
      <p>

<form action="credit2.php" method="POST"  enctype="multipart/form-data"  >
      

      <h4> AdharNo:<br/>     
         <center><input type="text" size="40" maxlength="12" name="adharno" value="" /></center>
		     <br/>
          CardNo:  <br/>
        <center><input type="text" size="40" maxlength="16" name="cardno" value="" /></center>
        <br/>
          Card Holder:  <br/>
        <center><input type="text" size="40" maxlength="50" name="cardholder" value="" /></center>
        <br/>
         Cvv:<br/>
        <center> <input type="text" size="40" maxlength="15" name="cvv" value="" /></center>
      <br/>
        Expire Date (yyyy-mm-dd):<br/><center>
         <input placeholder="yyyy-mm-dd" type="text" size="40" maxlength="50" name="expiredate" value="" /> </center>
       <br/>
	   Membership:<br/>
       <center>
       <select name="dropdown">
        <option value="sixmonth" selected>Sixmonth</option>
        <option value="fouryear">Fouryear</option>
        <option value="tenyear">Tenyear</option>
      </select>
    </center>
       <br/>
	 
		
        
   
      
    
    <br />
        <center><input class="button" type="submit" value="BUY"
      name="submit" /></center>
    
   
   </form>

	</p>
   </div>
</div>
</body>
</html>
