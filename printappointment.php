<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rental House Managment System Receipt of Appointment</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style></head>

<body>


<center>
 <h1 style="color:#000000; margin-left:120px;" align="left " ><b>RENTAL HOUSE MANAGEMENT SYSTEM </b><img   style="padding-left:30px; padding-top:10px; margin-left:80px;" src="house/logoo.png" />   
   </h1></center>
   <a href='tenant.php'  style='background-color:#CCCCCC; color:#000000; width:100px; height:20px; float:left;'><center>Go Back</center></a>
<input type="button" value="print" onclick="window.print();" style="margin-left:895px;" />
<br/><br/><br/>

<h2 style="margin-left:120px; margin-right:350px;">
<center><h4 style="padding-left:5px;">Appointment Receipt For Biometric Verification </h4></center>
____________________________________________________________________
<br/><br/>

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

   $adhar=$_SESSION['adhar'];    
$query=" SELECT * 
FROM  `agreemcredit` 
WHERE 	adharno ='$adhar'";
$data=mysqli_query($conn,$query);
$num=mysqli_num_rows($data);
if($num != '0')
{
$row=(mysqli_fetch_array($data));

echo '
<table width="820" height="470" border="4px;" bordercolor="#000000">

<tr >
  <td width="313">Receipt Number </td>
  <td width="408">'.$row['id'].'</td></tr>


<tr >
  <td>Transaction Id </td>
  <td>000'.$row['id'].'</td></tr>

<tr >
  <td>Name</td>
  <td>'.$row['cardholder'].'</td></tr>

 <tr> 
  <td>Property Type </td>
  <td>'.$row['propertytype'].'</td></tr>
<tr  >
  <td>Apointment Date</td>
  <td>'.$row['appointdate'].'</td></tr>
<tr  >
  <td>Prefered Time</td>
  <td>'.$row['preferedtime'].'</td></tr>
  
  <tr  >
  <td>No of Visits</td>
  <td>'.$row['novisits'].'</td></tr>


<tr >
  <td>Transaction Status </td>
  <td>Success</td></tr>
</table>';

}



$query2=" SELECT * 
FROM  `agreemdebit` 
WHERE adharno ='$adhar'";
$data2=mysqli_query($conn,$query2);
$num2=mysqli_num_rows($data2);
if($num2 != '0')
{
$roow=(mysqli_fetch_array($data2));

echo '
<table width="820" height="470" border="4px;" bordercolor="#000000">

<tr >
  <td width="313">Receipt Number </td>
  <td width="408">'.$roow['id'].'</td></tr>


<tr >
  <td>Transaction Id </td>
  <td>000'.$roow['id'].'</td></tr>

<tr >
  <td>Name</td>
  <td>'.$roow['cardholder'].'</td></tr>

 <tr> 
  <td>Property Type </td>
  <td>'.$roow['propertytype'].'</td></tr>
<tr  >
  <td>Apointment Date</td>
  <td>'.$roow['appointdate'].'</td></tr>
<tr  >
  <td>Prefered Time</td>
  <td>'.$roow['preferedtime'].'</td></tr>
  
  <tr  >
  <td>No of Visits</td>
  <td>'.$roow['novisits'].'</td></tr>


<tr >
  <td>Transaction Status </td>
  <td>Success</td></tr>
</table>';

}
?>

</h2>
<h2 style=" margin-left:120px; margin-right:350px;">
<font style="font-size:30px;"><b>Note:</b></font><br/>
<font style="font-size:20px;">
1.Thanks for Taking an Appointment<br/>
2.In case of any query / griveance , please email us at rentalhousemanagment@gmail.com 
</font>

</h2>

<br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/>

<img src="house/designs.png" align="right" width="160px" height="100px"; style="margin-right:100px;" />
<br/><br/><br/><br/><br/>
<?php
echo '<h4 style="margin-right:150px;" align="right">'. date("Y-m-d ").'</h4>';

?>

</body>
</html>