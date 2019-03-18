<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Tenant</title>
<style>
#outerbox{
width:350px;
overflow:hidden;
}
#sliderbox
{
position:relative;
width:700px;
animation-name:slide;
animation-duration:8s;
animation-iteration-count:infinite;
}
#sliderbox img
{
 float:left;
}

@keyframes slide{
0%
{ left:0px;
}
37.5%
{
left:0px;
}

50%{
left:-350px;
}

87.5%{
left:-350px;
}

100%{
left:-350px;
}
}

body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
.listflat{
  
  width:460px;
  height:700px;
  background:#001e2d;
  box-sizing:border-box;
  overflow:hidden;
  box-shadow:10px 10px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
  padding:30px;
  float:left
 
  }
  .listflat2
  {
  padding-top:30px;
  padding-left:100px;
  padding-right:100px;
  float:left;}
  
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
   <li> <a href="rentagreement.php" ><font style="font-size:21px;">Registred Rent Agreement</font></a></li>  
    <li> <a href="logout.php" >Logout</a></li>
</ul>



<br/><br/><br/><br/><br/>
<div style="background-color:#330000; border-radius: 60px; margin-left:170px; margin-right:30px; padding-bottom:3px; padding-top:3px; padding-left:5px; padding-right:5px;">
<form method="post" action="" >
<h3 style="color:#FFFF99; padding-right:30px;" align="right">
 Category:  <select name="dropdown" style="margin-right:15px; padding:7px; padding-left:12px; padding-right:3px; ">
        <option value="houselist" selected>House</option>
        <option value="flatlist">Flat</option>
        <option value="shop">Shop</option>
		<option value="godown">Godown</option>

      </select>
City:<input type="text" name="city" value="" maxlength="100" style="padding:5px;"   >
Area in city:<input type="text" name="area" value="" maxlength="100"  style="padding:5px;" >
 
  <input type="submit" value="Search Now" name="search"  style="color:#000000; padding-top:5px; padding-left:15px; padding-right:20px; padding-bottom:5px;"  >
</h3>
</form>
</div>
<?php
include_once 'connt.php';

if(isset($_POST['search']))
{
  
  $city=($_POST['city'] ); 
  $area=($_POST['area'] ); 
  $type=($_POST['dropdown'] ); 
  
  $a='houselist'; $b='flatlist'; $c='shop'; $d='godown';


if($type == $a)
{

 $query="SELECT * FROM  `houselist` 
WHERE city LIKE  '%$city%' || area LIKE  '%$area%' ";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total>0)
{
       while($row=mysqli_fetch_array($data))
        {
        //  echo $row['	address'] .$row['city'].$row['desc'].$row['rent'].$row['formatofflat'].$row['floorno']."<br/>";
		  
		  
		   echo '<div class="listflat2"><div class="listflat">
	   <center><div id="outerbox">
       <div id="sliderbox"><img src="'.$row['folder'].'" width="350px" height="250px" /><img src="'.$row['folder2'].'" width="350px" height="250px" /> </div></div>
	  </center>
	   <font style="color:#FFFF99; font-size:23px;"><br/>
	   
	   <font style="color:#FF9999">Name:</font>'.$row['name'].
	   '<font style="padding-left:10px;">'.$row['middlenm'].'</font>
        <font style="padding-left:10px;">'.$row['lastnm'].'</font><br/>
	   
	     <font style="color:#FF9999">City:</font>'.$row['city'] .'<br/>
		  <font style="color:#FF9999">Address:</font>' .$row['address'].'<br/>
		  
		  <font style="color:#FF9999">Email Id:</font>' .$row['email'] .'<br/>
		  <font style="color:#FF9999">Mobile No:</font>'.$row['mobile'] .'<br/>
		  
		   <font style="color:#FF9999">Format of house:</font>' .$row['formatofhouse'] .'<br/>
		   
		   
		  
		  <font style="color:#FF9999">Desciption of house:</font>'.$row['descrip'].'<br/>
		  
		  
		   
		    <font style="color:#FF9999">Rent:</font>' .$row['rent'] .'<br/>
			 <font style="color:#FF9999">Rent:</font>' .$row['deposit'] .'<br/>
			
			<center><a href="rentagreement.php" style="background-color:#000000; color:#FFFF66; border-radius: 15px; padding:8px; padding-bottom:10px; ">get for rent</a> </center>'
		  
		  .'</font>'.
	  '</div></div>';
				   
				   
				   
        }

}
else {
echo "<script type='text/javascript'>alert('Not have Record!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='tenant.php'
               </script>";}
}





if($type == $b)
{


 $query="SELECT * FROM  `flatlist` 
WHERE city LIKE  '%$city%' || area LIKE  '%$area%'  " ;
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total>0)
{
       while($row=mysqli_fetch_array($data))
        {
        //  echo $row['	address'] .$row['city'].$row['desc'].$row['rent'].$row['formatofflat'].$row['floorno']."<br/>";
		  
		  
		   echo '<div class="listflat2"><div class="listflat">
	   <center><div id="outerbox">
       <div id="sliderbox"><img src="'.$row['folder1'].'" width="350px" height="250px" /><img src="'.$row['folder2'].'" width="350px" height="250px" /></div></div></center>
	   <font style="color:#FFFF99; font-size:23px;"><br/>
	   
	   <font style="color:#FF9999">Name:</font>'.$row['name'].
	   '<font style="padding-left:10px;">'.$row['middlenm'].'</font>
        <font style="padding-left:10px;">'.$row['lastnm'].'</font><br/>
	   
	     <font style="color:#FF9999">City:</font>'.$row['city'] .'<br/>
		  <font style="color:#FF9999">Address:</font>' .$row['address'].'<br/>
		  
		  <font style="color:#FF9999">Email Id:</font>' .$row['email'] .'<br/>
		  <font style="color:#FF9999">Mobile No:</font>'.$row['mobileno'] .'<br/>
		  
		   <font style="color:#FF9999">Format of Flat:</font>' .$row['formatofflat'] .'<br/>
		   
		    <font style="color:#FF9999">Flat ID:</font>' .$row['hid'] .'<br/>
			 <font style="color:#FF9999">Floor No:</font>' .$row['floorno'] .'<br/>
		  
		  <font style="color:#FF9999">Desciption of Flat:</font>'.$row['desc'].'<br/>
		  
		  
		    <font style="color:#FF9999">Rent:</font>' .$row['rent'] .'<br/>
			<font style="color:#FF9999">Rent:</font>' .$row['deposit'] .'<br/>
			
			<center><a href="rentagreement.php" style="background-color:#000000; color:#FFFF66; border-radius: 15px; padding:8px; padding-bottom:10px; ">get for rent</a> </center>'
		  
		  .'</font>'.
	  '</div></div>';
				   
				   
				   
        }

}
else {
echo "<script type='text/javascript'>alert('Not have Record!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='tenant.php'
               </script>";}
}






if($type == $c)
{
 $query="SELECT * FROM  `shop` 
WHERE  city LIKE  '%$city%' || area LIKE  '%$area%' " ;
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total>0)
{
       while($row=mysqli_fetch_array($data))
        {
        //  echo $row['	address'] .$row['city'].$row['desc'].$row['rent'].$row['formatofflat'].$row['floorno']."<br/>";
		  
		  
		   echo '<div class="listflat2"><div class="listflat">
	   <center><div id="outerbox">
       <div id="sliderbox"><img src="'.$row['folder'].'" width="350px" height="250px" /><img src="'.$row['folder2'].'" width="350px" height="250px" /></div></div></center>
	   <font style="color:#FFFF99; font-size:23px;"><br/>
	   
	   <font style="color:#FF9999">Name:</font>'.$row['name'].
	   '<font style="padding-left:10px;">'.$row['middlenm'].'</font>
        <font style="padding-left:10px;">'.$row['lastnm'].'</font><br/>
	   
	       <font style="color:#FF9999">Shop Name:</font>'.$row['shopnm'] .'<br/>
	     <font style="color:#FF9999">City:</font>'.$row['city'] .'<br/>
		  <font style="color:#FF9999">Address:</font>' .$row['address'].'<br/>
		  
		  <font style="color:#FF9999">Email Id:</font>' .$row['email'] .'<br/>
		  <font style="color:#FF9999">Mobile No:</font>'.$row['mobile'] .'<br/>
		  
		   <font style="color:#FF9999">Area in sqm:</font>' .$row['areasqm'] .'<br/>
		   
		
		  
		  <font style="color:#FF9999">Desciption of Shop:</font>'.$row['desc'].'<br/>
		  
		  
		    <font style="color:#FF9999">Rent:</font>' .$row['rent'] .'<br/>
			<font style="color:#FF9999">Rent:</font>' .$row['deposit'] .'<br/>
			
			<center><a href="rentagreement.php" style="background-color:#000000; color:#FFFF66; border-radius: 15px; padding:8px; padding-bottom:10px; ">get for rent</a> </center>'
		  
		  .'</font>'.
	  '</div></div>';
				   
				   
				   
        }

}
else
{
echo "<script type='text/javascript'>alert('Not have Record!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='tenant.php'
               </script>";}

}






if($type == $d)
{
 $query="SELECT * FROM  `godown` 
WHERE city LIKE  '%$city%' || area LIKE  '%$area%' " ;
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total>0)
{
       while($row=mysqli_fetch_array($data))
        {
        //  echo $row['	address'] .$row['city'].$row['desc'].$row['rent'].$row['formatofflat'].$row['floorno']."<br/>";
		  
		  
		   echo '<div class="listflat2"><div class="listflat">
	   <center><div id="outerbox">
       <div id="sliderbox"><img src="'.$row['folder'].'" width="350px" height="250px" /><img src="'.$row['folder2'].'" width="350px" height="250px" /></div></div></center>
	   <font style="color:#FFFF99; font-size:23px;"><br/>
	   
	   <font style="color:#FF9999">Name:</font>'.$row['name'].
	   '<font style="padding-left:10px;">'.$row['middlenm'].'</font>
        <font style="padding-left:10px;">'.$row['lastnm'].'</font><br/>
	   
	       <font style="color:#FF9999">Godown Name:</font>'.$row['godownnm'] .'<br/>
	     <font style="color:#FF9999">City:</font>'.$row['city'] .'<br/>
		  <font style="color:#FF9999">Address:</font>' .$row['address'].'<br/>
		  
		  <font style="color:#FF9999">Email Id:</font>' .$row['email'] .'<br/>
		  <font style="color:#FF9999">Mobile No:</font>'.$row['mobile'] .'<br/>
		  
		   <font style="color:#FF9999">Area in sqm:</font>' .$row['areasqm'] .'<br/>
		   
		
		  
		  <font style="color:#FF9999">Desciption of Godown:</font>'.$row['desc'].'<br/>
		  
		  
		    <font style="color:#FF9999">Rent:</font>' .$row['rent'] .'<br/>
			<font style="color:#FF9999">Rent:</font>' .$row['deposit'] .'<br/>
			
			<center><a href="rentagreement.php" style="background-color:#000000; color:#FFFF66; border-radius: 15px; padding:8px; padding-bottom:10px; ">get for rent</a> </center>'
		  
		  .'</font>'.
	  '</div></div>';
				   
				   
				   
        }

}
else {
echo "<script type='text/javascript'>alert('Not have Record!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='tenant.php'
               </script>";}


}

}
?>

</body>
</html>
