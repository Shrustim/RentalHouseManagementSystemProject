
<?php
session_start();
include_once 'connt.php';
 
$useremail=$_SESSION['emailid'];
if($useremail==true)
{
//echo '<font color="#FFFFFF">'."Welcome".$useremail.'</font>';
}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
			  
}?>
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
          

 @-webkit-keyframes spincube {
    from,to  { -webkit-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
    16%      { -webkit-transform: rotateY(-90deg);                           }
    33%      { -webkit-transform: rotateY(-90deg) rotateZ(90deg);            }
    50%      { -webkit-transform: rotateY(-180deg) rotateZ(90deg);           }
    66%      { -webkit-transform: rotateY(-270deg) rotateX(90deg);           }
    83%      { -webkit-transform: rotateX(90deg);                            }
  }

  @keyframes spincube {
    from,to {
      -moz-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
      -ms-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
      transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    }
    16% {
      -moz-transform: rotateY(-90deg);
      -ms-transform: rotateY(-90deg);
      transform: rotateY(-90deg);
    }
    33% {
      -moz-transform: rotateY(-90deg) rotateZ(90deg);
      -ms-transform: rotateY(-90deg) rotateZ(90deg);
      transform: rotateY(-90deg) rotateZ(90deg);
    }
    50% {
      -moz-transform: rotateY(-180deg) rotateZ(90deg);
      -ms-transform: rotateY(-180deg) rotateZ(90deg);
      transform: rotateY(-180deg) rotateZ(90deg);
    }
    66% {
      -moz-transform: rotateY(-270deg) rotateX(90deg);
      -ms-transform: rotateY(-270deg) rotateX(90deg);
      transform: rotateY(-270deg) rotateX(90deg);
    }
    83% {
      -moz-transform: rotateX(90deg);
      -ms-transform: rotateX(90deg);
      transform: rotateX(90deg);
    }
  }

  .cubespinner {
    -webkit-animation-name: spincube;
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 10s;

    animation-name: spincube;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-duration: 10s;

    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;

    -webkit-transform-origin: 20px 20px 0;
    -moz-transform-origin: 20px 20px 0;
    -ms-transform-origin: 20px 20px 0;
    transform-origin: 20px 20px 0;
  }

  .cubespinner div {
    position: absolute;
	
    width: 200px;
    height: 200px;
	padding:8px;
    border: 1px solid #ccc;
    background: rgba(255,255,255,0.8);
    box-shadow: inset 0 0 20px rgba(0,0,0,0.2);
    line-height: 100px;
    text-align: left;
    font-size: 100px;
  }

  .cubespinner .face1 {
    -webkit-transform: translateZ(20px);
    -moz-transform: translateZ(20px);
    -ms-transform: translateZ(20px);
    transform: translateZ(20px);
  }
  .cubespinner .face2 {
    -webkit-transform: rotateY(90deg) translateZ(20px);
    -moz-transform: rotateY(90deg) translateZ(20px);
    -ms-transform: rotateY(90deg) translateZ(20px);
    transform: rotateY(90deg) translateZ(20px);
  }
  .cubespinner .face3 {
    -webkit-transform: rotateY(90deg) rotateX(90deg) translateZ(20px);
    -moz-transform: rotateY(90deg) rotateX(90deg) translateZ(20px);
    -ms-transform: rotateY(90deg) rotateX(90deg) translateZ(20px);
    transform: rotateY(90deg) rotateX(90deg) translateZ(20px);
  }
  .cubespinner .face4 {
    -webkit-transform: rotateY(180deg) rotateZ(90deg) translateZ(20px);
    -moz-transform: rotateY(180deg) rotateZ(90deg) translateZ(20px);
    -ms-transform: rotateY(180deg) rotateZ(90deg) translateZ(20px);
    transform: rotateY(180deg) rotateZ(90deg) translateZ(20px);
  }
  .cubespinner .face5 {
    -webkit-transform: rotateY(-90deg) rotateZ(90deg) translateZ(20px);
    -moz-transform: rotateY(-90deg) rotateZ(90deg) translateZ(20px);
    -ms-transform: rotateY(-90deg) rotateZ(90deg) translateZ(20px);
    transform: rotateY(-90deg) rotateZ(90deg) translateZ(20px);
  }

  .cubespinner .face6 {
    -webkit-transform: rotateX(-90deg) translateZ(20px);
    -moz-transform: rotateX(-90deg) translateZ(20px);
    -ms-transform: rotateX(-90deg) translateZ(20px);
    transform: rotateX(-90deg) translateZ(20px);
  }


   


</style>
</head>

<body>
<div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div>
     
     
<center>
	<div style="box-shadow: 0 5px 10px white;">
	        
			<a href="rent.php"><h1  class="boxx"  style="top:19%;
			left:10%;">HOME</h1></a>
			
			<a href="profile.php"><h1  class="boxx"  style="top:19%;
			left:30%;">profile</h1></a>
    
         <a href="owner.php"><h1  class="boxx"  style="top:19%;
			left:50%;">owner</h1></a>
    
h	  <a href="tenant.php"><h1  class="boxx"  style="top:19%;
			left:70%;">tenant</h1></a>
    
	 
			
			<a href="logout.php"><h1  class="boxx"  style="top:19%;
			left:90%;">logout</h1></a>
			
		
    </div>
</center>	
<br/><br/>
<br/>
<br/><br/>
<br/>

<?php



  
 $query=" SELECT * 
FROM  `users` 
WHERE email ='$useremail'";
$data=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($data))
{
echo '<center><marquee behavior="alternate" scrollamount="8" width="1000"><i><b>
       <font style="color:#FFFFFF;  font-size:30px;  ">Welcome</font>
	   <font style="padding-left:20px; color:#FFFFFF; font-size:30px;">'
	   .$row['firstnm'].'</font> </b></i></marquee></center>';
}

?>

<div align="center">
<div style="padding:30px">
<div class="stage" style="width: 200px; height: 200px;">
<div class="cubespinner">

<div class="face1"><img src="house/ah.jpg" width="200" height="200" /></div>
<div class="face2"><img src="house/bh.jpeg"  width="200" height="200" /></div>
<div class="face3"><img src="house/ch.jpg" width="200" height="200" /> </div>
<div class="face4"><img src="house/e.jpeg" width="200" height="200" /> </div>
<div class="face5"><img src="house/ah.jpg" width="200" height="200" /></div>
<div class="face6"><img src="house/ch.jpg" width="200" height="200" /> </div>
</div>
</div>
</div>
</div>






 

</body>
</html>


