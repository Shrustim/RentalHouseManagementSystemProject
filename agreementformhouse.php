<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rent agreement of house</title>
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
  height:2500px;
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

<form action="agreemformhousebb.php" method="post">
<center>
  <h1 style="color:#FFFF99">Landloard Details</h1></center><br/>
  <font style=" font-size:19px;" >
  <p align="justify"  style="padding-left:35px;">
  
  
  Last Name:
  <input type="text" name="lastnm" maxlength="50" size="25" value=""  />
  First Name:
  <input type="text" name="firstnm" maxlength="50" size="25" value="" />
  
  <br/><br/>
  
 
  Age:
  <input type="text" name="age" maxlength="3" size="20" value=""  />
   UID(adhar no):
  <input type="text" name="adharno" maxlength="12" size="33" value=""  />
 
 
   <br/><br/>
   
 
   PAN:
  <input type="text" name="pan" maxlength="10" size="30" value="" />
   Gender:
   <input name="subject" type="radio" value="Male"> Male
    <input type="radio" name="subject" value="Female"> Female

	<br/><br/>
	
Contact Details
	<br/><br/>
	
	
	 Mobile No:
  <input type="text" name="mobno" maxlength="10" size="25" value=""  />
  Email Id:
  <input type="text" name="email" maxlength="50" size="27" value="" />

  
  <br/><br/>
   
	Address(as mentioned on Adhar card)
	<br/><br/>
	
	
	Building Name:
  <input type="text" name="buildingnm" maxlength="50" size="25" value=""  />
  Flat No:
  <input type="text" name="flatno" maxlength="50" size="24" value="" />

  
  <br/><br/>
  
  
     Road/sector:
  <input type="text" name="sector" maxlength="50" size="25" value=""  />
  Location:
  <input type="text" name="location" maxlength="50" size="26" value="" />
  	
	<br/><br/>
	
	 
   Village/city:
  <input type="text" name="city" maxlength="50" size="25" value=""  />
   PIN:
  <input type="text" name="pin" maxlength="10" size="31" value="" />
			 </p>
    </font>
	

<br/>



<center>
  <h1 style="color:#FFFF99">Tenant Detils</h1></center><br/>
  <font style=" font-size:19px;" >
  <p align="justify"  style="padding-left:35px;">
  
  
  Last Name:
  <input type="text" name="tlastnm" maxlength="50" size="25" value=""  />
  First Name:
  <input type="text" name="tfirstnm" maxlength="50" size="25" value="" />
  
  <br/><br/>
  
 
  Age:
  <input type="text" name="tage" maxlength="3" size="20" value=""  />
   UID(adhar no):
  <input type="text" name="tadharno" maxlength="12" size="33" value=""  />
 
 
   <br/><br/>
   
 
   PAN:
  <input type="text" name="tpan" maxlength="10" size="30" value="" />
   Gender:
   <input name="tsubject" type="radio" value="Male"> Male
    <input type="radio" name="tsubject" value="Female"> Female

	<br/><br/>
	
Contact Details
	<br/><br/>
	
	
	 Mobile No:
  <input type="text" name="tmobno" maxlength="10" size="25" value=""  />
  Email Id:
  <input type="text" name="temail" maxlength="50" size="27" value="" />

  
  <br/><br/>
   
	Address(as mentioned on Adhar card)
	<br/><br/>
	
	
	Building Name:
  <input type="text" name="tbuildingnm" maxlength="50" size="25" value=""  />
  Flat No:
  <input type="text" name="tflatno" maxlength="50" size="24"  value=""/>

  
  <br/><br/>
  
  
     Road/sector:
  <input type="text" name="tsector" maxlength="50" size="25"   value=""/>
  Location:
  <input type="text" name="tlocation" maxlength="50" size="26" value="" />
  	
	<br/><br/>
	
	 
   Village/city:
  <input type="text" name="tcity" maxlength="50" size="25"  value="" />
   PIN:
  <input type="text" name="tpin" maxlength="10" size="31"  value="" />
			 </p>
    </font>
	
	
	<br/>
	<center>
  <h1 style="color:#FFFF99">Property Details</h1></center><br/>
 <font style=" font-size:19px;" >
  <p align="justify"  style="padding-left:35px;">
  
	  Property type:
	  	<font style="padding:20px; padding-right:30px;">

	 <select name="propertytype" style="padding-left:20px; padding-right:20px;">
        <option value="House" selected>House</option>
       
      </select></font>
	   Area (sq.ft):
  <input type="text" name="areasqft" maxlength="10" size="32"  value="" />
 
  <br/><br/>
   
	Survey no/Plot no:
	<font style="padding:20px; padding-right:30px;">

   <select name="plotsurveyno">
        <option value="surveyno" selected>Survey No:</option>
        <option value="plotno">Plot No:</option>
		</select></font>
   Number:
  <input type="text" name="spno" maxlength="50" size="29" value="" />
  <br/><br/>
  Property Usage (Select an Option):
	<font style="padding:20px; padding-right:30px;">

   <select name="propertyusage" style="padding-left:30px; padding-right:160px;" >
        <option value="Residential" selected>Residential</option>
        <option value="Non Residential">Non Residential</option>
		</select>
		</font>
  <br/><br/>
   Property Address
	<br/><br/>
	
	
	Building Name:
  <input type="text" name="pbuildingnm" maxlength="50" size="20" value=""  />
  
  
  <br/><br/>
  
  
     Road/sector:
  <input type="text" name="psector" maxlength="50" size="25"  value="" />
  Location:
  <input type="text" name="plocation" maxlength="50" size="26" value="" />
  	
	<br/><br/>
	
	 
   Village/city:
  <input type="text" name="pcity" maxlength="50" size="25" value=""  />
   PIN:
  <input type="text" name="ppin" maxlength="10" size="31" value="" />
  
  <br/><br/>
   Appliances/Furniture (optionally type 0 )
      <br/><br/>
     Fan:
  <select name="fan" style="padding-left:65px; padding-right:60px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Bed:
 <select name="bed" style="padding-left:65px; padding-right:60px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Sofa:
<select name="sofa" style="padding-left:70px; padding-right:60px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  <br/><br/>
     AC:
<select name="ac" style="padding-left:40px; padding-right:40px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Washing Machine:
 <select name="washingmachine" style="padding-left:40px; padding-right:40px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Gyeser:
 <select name="gyeser" style="padding-left:40px; padding-right:50px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  <br/><br/>
     Cupboard:
 <select name="cupboard" style="padding-left:35px; padding-right:50px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Water Cooler:
 <select name=" watercooler" style="padding-left:35px; padding-right:50px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  Table:
  <select name="table" style="padding-left:35px; padding-right:45px;">
       <option value="0" selected>0</option>
       <option value="1" >1</option>
	   <option value="2" >2</option>
	   <option value="3" >3</option>
      </select>
  </p>
    </font>
  
  <br/>
	<center>
  <h1 style="color:#FFFF99">Agreement</h1></center><br/>
 <font style=" font-size:19px;" >
  <p align="justify"  style="padding-left:35px;">
  
   Monthly Rent:
  <input type="text" name="montlyrent" maxlength="10" size="12"   value="" />
   Total Duration in Months(usually 11):
  <input type="text" name="month" maxlength="50" size="6" value=""  />
  <br/><br/>
  
   Deposite Amount:
  <input type="text" name="depositeamount" maxlength="50" size="34" value=""  />
      Refundable Deposite
	<br/><br/>
	Mode of Deposite:
    <select name="modedeposite">
        <option value="cash" selected> Cash</option>
        <option value="internetbank">Internet Banking</option>
		</select>
	 Start Date(yyyy-mm-dd):
     <input placeholder="yyyy-mm-dd" type="text" name="startdate" maxlength="50" size="17"  value=""  />	
   <br/><br/>
   Lock-in Period(months)Usually 6 months:
     <input type="text" name="lockinperiod" maxlength="50" size="33"  value=""  />	<br/><br/>
	 Registration charges paid by:
	  <select name="registrationpaidby" style="padding-left:30px; padding-right:260px;" >
        <option value="Licensee" selected>Licensee</option>
        <option value="Licensor">Licensor</option>
		</select>	 
   <br/><br/>
  
             
   <br/>
   
   <h1 align="center"> Witness</h1>
   <br/>
   * Biometric verification of 2 witnesses is mendatory.<br/>
   You can provide witness details at the time of biometric.
   <br/> * Witnesses can be managed by PECULE @ 200 Rs.per witness 
   </p>
  </font>
  <br/>
  <center>
  <input type="submit" value="Submit" align="middle" style=" padding-left:20px; padding-right:20px; " name="Submit"  /></center>
  </form>

</div>
</center>
<br/><br/><br/>
</body>
</html>
