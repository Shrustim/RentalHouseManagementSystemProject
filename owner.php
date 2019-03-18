<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rental house managment system</title>
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
width:222px;
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
    width:222px;
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

.box2{
    position: absolute;
    width:190px;
  height:170px;
    box-sizing:border-box;
  box-shadow:10px 10px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
   background-color:#660099;
   
  }
  
  .box1{
  padding:30px;
  color:#FFFFFF;
   font-family:Verdana, Arial, Helvetica, sans-serif;
   
    }
.style2 {color: #FFFFCC}



 .box{
  position:absolute;
  top:129%;
  left:49%;
  transform: translate(-50%,-50%);
  width:860px;
  height:860px;
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
  
  
  <div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div> 


<ul>
   <li> <a href="rent.php">home</a></li>
   <li> <a href="" >house</a>
      <ul>
        <li> <a href="addhouse.php" >addhouse</a></li>
          <li> <a href="listhouse.php" >houselist</a></li> 
      </ul>
  </li>  
   <li> <a href="" >flat</a>
       <ul>
        <li> <a href="addflat.php" >addflat</a></li>
          <li> <a href="listflat.php" >flatlist</a></li> 
       </ul>
   </li>
   <li> <a href="" >shop</a>
       <ul>
        <li> <a href="addshop.php" >addshop</a></li>
          <li> <a href="listshop.php" >shoplist</a></li> 
      </ul>
   </li>
   <li> <a href="" >godown</a>
      <ul>
        <li> <a href="addgodown.php" >addgodown</a></li>
          <li> <a href="listgodown.php" >godownlist</a></li> 
      </ul> 
   </li>
   <li> <a href="logout.php" >logout</a></li>
</ul>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<center>
<font color="#FFFFCC"><h1> <marquee behavior="alternate" scrollamount="8" width="700"><i><u>Membership</u></i></marquee></h1>
</font></center>



 <div class="box">
	   <span></span>
	   <span></span>
	   <span></span>
	   <span></span>
	   
 <div class="content">
<br/><br/>
<center>
<font color="#FFFFCC">
<h2>There are three offers of membership <br/><br/><i>* Six months membership =>700 Rs<br/>
* Four year membership =>1500 Rs<br/> * Ten years Membership =>2500 Rs</i></h2>
<br/><br/><br/>
<h2>SELECT PAYMENT OPTION FOR BUYING MEMBERSHIP</h2>
</font> 
</center>

<div  style="top:60%; left:18%;" class="box2" >
<div class="box1" ><a href="credit.php"><h1 class="style2"><u>CREDIT CARD</u></h1>
</a> </div>
</div>

<div style="top:60%; left:60%;" class="box2" >
<div class="box1" > <a href="debit.php"><h1 class="style2"><u>DEBIT CARD</u></h1> </a></div>
</div>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>
<h4>
<font style="color:#990033; font-size:20px " ><u>Note:</u> </font>

<font style="color:#FFFF33; ">If your membership will finised you could not add your house or flat or godown or shop.
Your added details of house or flat or godown or shop should be deleted.Then you take next membership and add your details of house
or flat or godown or shop...  </font>     
</h4>

  </div>




 
	
	
   </div>
</div>














</body>
</html>