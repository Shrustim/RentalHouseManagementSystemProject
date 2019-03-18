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



 .box{
  position:absolute;
  top:97%;
  left:35%;
  transform: translate(-20%,-20%);
  width:650px;
  height:1290px;
  background:#001e2d;
  box-sizing:border-box;
  overflow:hidden;
  box-shadow:15px 15px 15px #fff ;
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
  transform:skewX(-7deg);
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
   text-align:left;
  font-size:20px;
  margin:0,0,10px;
  padding:0;
  }
  .box .content p
  {
  color:#fff;
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





$query="SELECT enddatemember
FROM  `creditmembership` 
WHERE email='$useremail'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);




$querya="SELECT enddatemember
FROM  `debitmembership` 
WHERE email='$useremail'";
$dataa=mysqli_query($conn,$querya);
$totala=mysqli_num_rows($dataa);
$resulta=mysqli_fetch_assoc($dataa);


$currentdate=date("Y-m-d");

if($total != '0')
{

     if($result['enddatemember']  == $currentdate)
        {  echo "<script type='text/javascript'>alert('YOU MEMBERSHIP WAS FINISHNED ,YOU CAN'T ADD HOUSE!')
                         </script>";
          echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
               </script>";
        }
      else 
       {
          
               //echo "you can add house";
         }
 
}
else if($totala != '0')
{

    if($resulta['enddatemember']  == $currentdate)
        {  echo "<script type='text/javascript'>alert('YOU MEMBERSHIP WAS FINISHNED ,YOU CAN'T ADD HOUSE!')
                         </script>";
          echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
               </script>";
        }
      else 
       {
          
               //echo "you can add house";
         }
 
}
else 
{
  echo "<script type='text/javascript'>alert(' You should  buy membership for add house!')
                         </script>";
   echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
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
   <li> <a href="logout" >logout</a></li>
</ul>




<br/ >
<br/ ><br/ ><br/ ><br/ ><br/ ><br/ ><br/ ><br/ ><br/ ><br/>
 <center><h3> <marquee behavior="alternate" scrollamount="8" width="1000"><font style="color:#FFFFFF; font-family:Courier New, Courier, monospace; font-size:30px;  "><i>Here you must add  all information of your godown</i></font> 
</marquee></h3></center>


  <div class="box">
     <span></span>
     <span></span>
     <span></span>
     <span></span>
     
  
<div class="content">
    <h1 style="text-shadow:5px 5px 9px yellow;">ADD GODOWN</h1> 
<center>     <p>
    <form action="addg.php" method="POST"  enctype="multipart/form-data"  >
      

      <h4>  Firstname of Owner:<br/>     
         <center><input type="text" size="40" maxlength="40" name="name" value="" /></center>
		     <br/>
			 Middlename of Owner:<br/>     
         <center><input type="text" size="40" maxlength="40" name="middlenm" value="" /></center>
		     <br/>
			 Lastname of Owner:<br/>     
         <center><input type="text" size="40" maxlength="40" name="lastnm" value="" /></center>
		     <br/>
          Name of Godown:  <br/>
        <center><input type="text" size="40" maxlength="50" name="godownnm" value="" /></center>
        <br/>
          Name of City:  <br/>
        <center><input type="text" size="40" maxlength="50" name="city" value="" /></center>
        <br/>
         Area in City:<br/>
        <center> <input type="text" size="40" maxlength="50" name="area" value="" /></center>
      <br/>
        Full Address:<br/><center>
          <textarea name="address" cols="40"></textarea> </center>
       <br/>
	  Area in sqm:<br/><center> <input type="text" size="40" maxlength="6" name="areasqm" value=""  /></center>
        <br/>

        No of rooms in Godown :<br/><center><input type="text" size="40" maxlength="6" name="noroom" value="" /></center>
       <br/>
	
		Email :<br/><center><input type="text" size="40" maxlength="25" name="email" value="" /></center>
       <br/>
        Mobile No :<br/><center><input  type="text" size="40" maxlength="10" name="mobile" value="" /></center>
       <br/>
         
        
     Description of Godown:<br/><center>
       <textarea name="desc" cols="40"></textarea>
     </center>
      
     
      Image of Godown:<br/>
       <center>
      <input type="file" name="uploadfile" value=""/> <br/><br/>
	    <input type="file" name="uploadfile2" value=""/> <br/>
      </center>
      <br/>
       
        Rent of Godown:<br/><center><input  type="text" size="40" maxlength="10" name="rent" value="" /></center>
       <br/>
     Deposite of Godown :<br/><center><input  type="text" size="40" maxlength="20" name="deposite" value="" /></center>
       <br/>
      </h4>
      
    
    <br />
        <center><input class="button" type="submit" value="ADD"
      name="submit" /></center>
    
   
   </form>
   </p> </center>
   </div>
</div>

</body>
</html>
