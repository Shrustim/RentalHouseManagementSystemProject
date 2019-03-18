<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Help</title>

</head>
<style>
 body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
  
   .stat 
       { 
            text-align:center;
            color:#FFFFFF;
			text-shadow:5px 5px 7px #FFFF66;
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
width:224px;
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
      text-transform:uppercase;
	   font-family: sans-serif;
	   display:block;
}
ul li a:hover
{
       background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 300%;
      border-radius: 60px;
      color: #000000;
	  width:224px;
height:70px;
	  
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}
  
   .box{
  position:absolute;
  top:95%;
  left:49%;
  transform: translate(-50%,-50%);
  width:750px;
  height:750px;
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
<body>
<div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div>   


<ul>
     <li> <a href="index.php">Home</a></li>
   
    <li> <a href="aboutus.php" >Aboutus</a></li>
   
   <li style="background: linear-gradient(110deg,#999999,#990033,#990066,#990066);"> <a href="help.php" >Help</a></li>
   
   <li> <a href="contact.php" >Contact</a></li>
   
  
   
    <li> <a href="adlogin.php">Login</a></li>
   
   <li> <a href="a.php" >Sign Up</a></li>

</ul>
   
<br/> <br/><br/>
 <div class="box">
	   <span></span>
	   <span></span>
	   <span></span>
	   <span></span>
	   
 <div class="content">
 <h1 align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:36px; color:#FFFFFF"><i><u>HELP</u></i></h1>
 <br/>
 <center>
 <form action="h.php" method="post" >
 <font color="#FFFFCC" style="font-family:Courier New, Courier, monospace; font-size:20px; ">First Name:</font><br/><br/>
 <input type="text" name="firstnm"  size="50" maxlength="40"  value="" /><br/><br/>
 
 <font color="#FFFFCC" style="font-family:Courier New, Courier, monospace; font-size:20px; ">Last Name:</font><br/><br/>
 <input type="text" name="lastnm"  size="50" maxlength="40"  value="" /><br/><br/>
 
 <font color="#FFFFCC" style="font-family:Courier New, Courier, monospace; font-size:20px; ">Email ID:</font><br/><br/>
 <input type="text" name="email"  size="50" maxlength="100"  value="" /><br/><br/>
 
 <font color="#FFFFCC" style="font-family:Courier New, Courier, monospace; font-size:20px; ">Mobile No:</font><br/><br/>
 <input type="text" name="mobno"  size="50" maxlength="10"  value="" /><br/><br/>
 
 <font color="#FFFFCC" style="font-family:Courier New, Courier, monospace; font-size:20px; ">Message:</font><br/><br/>
  <textarea name="message" cols="40" ></textarea>
  <br/><br/>
 <input type="submit" name="submit"    value="SEND" style="padding-bottom:5px; padding-top:5px; padding-left:20px; padding-right:20px;" />
  </form>
  <br/>
  <font color="#CC0000" style="font-family:Courier New, Courier, monospace; font-size:20px; "> <b><i><u>Note</u></i></b></font>
   <font color="#FFFF33" style="font-family:Courier New, Courier, monospace; font-size:20px; ">:Help provide in 24/7Hr<br/>
  As your help ticket
  </font>
 </center>
  </div>




 
	
	</p>
   </div>
</div>
 
</body>
</html>

