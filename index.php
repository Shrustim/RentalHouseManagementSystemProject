<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>index</title>
<style type="text/css">
<!--
.style2 {font-style: italic}
-->
</style>
</head>
<style type="text/css">
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
border-radius: 50px;
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
      border-radius: 50px;
      color: #000000;
	  width:224px;
height:70px;
	  
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}
  
  
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

  .box{
  position:absolute;
  top:92%;
  left:67%;
  transform: translate(-50%,-50%);
  width:700px;
  height:700px;
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
  
   
 .slide-container{
  position:relative;
  }
  .slide img
  {
  width:640px;
  height:640px;
  }
  .effect{
  animation-name:effect;
  animation-duration:2s;
  }
  @keyframes effect{
  from{
    opacity:0.6;
  }
  to{
    opacity:1;
  }
  }
  
    .block
  {
  float:left;
  width:33.3%;
  color:#000000;
  background-color:#FFFFCC;
  border-color:#000000;
  border:9px solid #000000;
  padding:15px;
  box-sizing:border-box;
   }

  
  </style>
<body>
<div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div>   


<ul>
   <li style="background: linear-gradient(110deg,#999999,#990033,#990066,#990066);"> <a href="index.php">Home</a></li>
   
    <li> <a href="aboutus.php" >Aboutus</a></li>
   
   <li> <a href="help.php" >Help</a></li>
   
   <li> <a href="contact.php" >Contact</a></li>
   
   
    <li> <a href="adlogin.php">Login</a></li>
   
   <li> <a href="a.php" >Sign Up</a></li>

</ul>
   
<br/> <br/><br/>
 
 <center>
   <h3> <span class="style2">
     <marquee behavior="alternate" scrollamount="8" width="1000">
       <font style="color:#FFFFFF; font-family:Courier New, Courier, monospace; font-size:30px;  ">welcome</font> 
               </marquee>
   </span></h3>
 </center>   



<br/>

<h2  style="color:#FFFFCC; font:Courier New, Courier, monospace; padding-left:20px;">House plays huge role in our life.</h2>
<h2  style="color:#FFFFCC; font:Courier New, Courier, monospace;  padding-left:20px;">Rental House has become  important </h2>
<h2  style="color:#FFFFCC; font:Courier New, Courier, monospace; padding-left:20px;"> factor in modern society</h2>



<br/>
<h2 style="color:#FFFFCC; font:Courier New, Courier, monospace;  padding-left:20px;"><i>"Home is where our story begins......" <br/><br/>
"Home is the starting place of love <br/><br/>
,hope and dreams."<br/><br/>
"Home is not place... it's feeling."<br/><br/>
"There is nothing more important than<br/><br />
 a good ,safe,secure home."<br/><br/>
 "There's is no place like home."</i></h2>

 <div class="box">
	   <span></span>
	   <span></span>
	   <span></span>
	   <span></span>
	   
 <div class="content">
 
    <div class="slide-container">
  
  <div class="effect slide">
         <img src="house/houseaa.jpg"/>
   </div>
  <div class="effect slide" >  
    <img src="house/housebb.jpg"/>   
      </div>
  <div class="effect slide" >
  <img src="house/houseee.jpg"/>
      </div>
	  <div class="effect slide">
         <img src="house/housecc.jpg" />
   </div>
   
  
  </div>



<script>
  var index=0;
  show();
  function show(){
      var i;
	  var slides=document.getElementsByClassName("slide");

	  for(i=0;i<slides.length;i++)
	  {
	   slides[i].style.display="none";
	   
	  } 
	  index=index+1;
	  if(index>slides.length){
	  index=1;
	  }
	  
	  slides[index-1].style.display="block";
	
	  setTimeout(show,2000);
  }
</script>
 
	
	</p>
   </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<div>
<h1 align="center" style="color:#FFFFCC; font:Courier New, Courier, monospace;"><em><u>Why We Are The Best</u></em></h1>


 <div class="block">
 <h2>Highly Recomended</h2>
 <p>
 Everyone who's going to job in other cities ,
 then by this website they can get easily house for rent .
 <br/><br/>
  </p>
 </div>

<div class="block">
 <h2>Professional Service</h2>
 <p>
 Information of house or flat or shop or godown is best .
  Fill an online Form Anytime Anywhere.Get Sample Copy of rent agreement also.  
 </p>
 </div>
 
 <div class="block" >
 <h2>Positive Reviews</h2>
 <p>
 Everyone use this web application for getting easily rent house
 and send positive reviews.
 <br/><br/> 
 </p>
 </div>
</div>

<div><br/><br/><br/><br/></div>
<div>
<h2 align="center">

  <img src="house/icon1.jpg " width="70px" height="70px" style="padding:25px;" />
  <img src="house/icon2.jpg" width="70px" height="70px"  style="padding:25px;"/>
  <img src="house/icon3.jpg" width="70px" height="70px"  style="padding:25px;"/></h2>
</div>
</body>
</html>
