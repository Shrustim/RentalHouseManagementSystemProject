<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>print draft Agreement</title>
<style>
.block {
width:800px;
font-family:Arial, Helvetica, sans-serif;
font-size: 20px;
}
</style>
</head>

<body>
  <a href='biometricappoint.php'  style='background-color:#CCCCCC; color:#000000; width:100px; height:20px; float:left;'><center>Go Back</center></a>
<input type="button" value="print" onclick="window.print();" style="margin-left:895px;" />
<h1 align="center">LEAVE AND LICENSE AGREEMENT</h1>
<h3 align="center">This agreement is made and executed on at<br/>Between,</h3>

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


$email=$_SESSION['emailflat'];       
$query=" SELECT * 
FROM  `agreementofflat` 
WHERE lemailid ='$email'";
$data=mysqli_query($conn,$query);
$num=mysqli_num_rows($data);

$email1=$_SESSION['emailshop'];       
$query1=" SELECT * 
FROM  `agreementofgodshop` 
WHERE lemailid ='$email1'";
$data1=mysqli_query($conn,$query1);
$num1=mysqli_num_rows($data1);

$email2=$_SESSION['emailhouse'];       
$query2=" SELECT * 
FROM  `agreementofhouse` 
WHERE lemailid ='$email2'";
$data2=mysqli_query($conn,$query2);
$num2=mysqli_num_rows($data2);



if($num != '0')
{
$row=(mysqli_fetch_array($data));

echo '<center><div align="justify" class="block">
      1) Name:<b> '.$row['lfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['llastnm'].'</b></font>, Age :<b>'.$row['lage'] .'</b> Years, PAN:<b> '.$row['lpan'].'</b>
Aadhaar: <b>'.$row['ladharno'].'</b> Residing at: Flat No:<b>'.$row['lflatno'].'</b>,Building Name:<b>'.$row['lbuildnm'].'</b> Block Sector/Road:<b>'.$row['lroadsector'].'</b>,
 <b>'.$row['llocation'].'</b>,<b>
 '. $row['lcityvillage'].'</b>,<b>'. $row['lpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include the Licensor above
named and also his/her/their respective heirs, successors, assigns, executors and administrators)
<br/>
<center>AND</center><br/>
1) Name:<b> '.$row['tfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['tlastnm'].'</b></font>, Age :<b>'.$row['tage'] .'</b> Years, PAN: <b>'.$row['tpan'].'</b>
Aadhaar:<b> '.$row['tadharno'].'</b> Residing at: Flat No:<b>'.$row['tflatno'].'</b>,Building Name:<b>'.$row['tbuildnm'].'</b> Block Sector/Road:<b>'.$row['troadsector'].'</b>, <b>'.$row['tlocation'].'</b>,<b>'. 
$row['tocation'].'</b>,<b>'. $row['tpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include only Licensee
above named).<br/><br/>
WHEREAS the Licensor is absolutely seized and possessed of and or otherwise well and
sufficiently entitled to all that constructed portion being unit described in Schedule I hereunder
written and are hereafter for the sake of brevity called or referred to as Licensed Premises and
is/are desirous of giving the said premises on Leave and License basis under Section 24 of the
Maharashtra Rent Control Act, 1999.<br/><br/>
AND WHEREAS the Licensee herein is in need of temporary premises for his<b> '.$row['propertyusage'].' </b>use
has/have approached the Licensor with a request to allow the Licensee herein to use and occupy
the said premises on Leave and License basis for a period of <b>'.$row['totalduraton'].'</b> Months commencing from<br/>
<b>'.$row['startdate'].'</b> and ending on , on terms and subject to conditions hereafter appearing.<br/><br/>
AND WHEREAS the Licensor have agreed to allow the Licensee herein to use and occupy the
said Licensed premises for his aforesaid<b> '.$row['propertyusage'].'</b> purposes only, on Leave and License basis
for above mentioned period, on terms and subject to conditions hereafter appearing;<br/><br/>
<font style="font-size:19px;" >
NOW THEREFORE IT IS HEREBY AGREED TO, DECLARED AND RECORDED BY AND
BETWEEN THE PARTIES HERETO AS FOLLOWS:-</font><br/><br/>
1)<b> Period:</b> That the Licensor hereby grants to the Licensee herein a revocable leave and license,
to occupy the Licensed Premises, described in Schedule I hereunder written without creating any
tenancy rights or any other rights, title and interest in favour of the Licensee for a period of<b> '.$row['totalduraton'].'</b>
Months commencing from <b>'.$row['startdate'].' </b>and ending on. <br/><br/>
2)<b> License Fee & Deposit:</b>That the Licensee shall pay to the Licensor License at the rate of Rs<b> '.$row['montlyrent'].'</b>
for the use of the said Licensed premises.The amount of monthly compensation License fee shall be payable within first five days of the
concerned month of Leave and License. Licensees shall also pay to the Licensor Rs. <b>'.$row['depositeamount'].'</b>
interest free refundable deposit, for the use of the said Licensed premises.<br/><br/>
3) <b>Payment of Deposit:</b> That the Licensee have paid / shall pay the above mentioned
deposit/premium as mentioned above by Cash. Amount Rs.<b>'.$row['depositeamount'].'/-</b>
<br/><br/>
4)<b> Maintenance Charges:</b> That the all outgoings including all rates, taxes, levies, assessment,
maintenance charges, non occupancy charges, etc. in respect of the said premises shall be paid
by the Licensor.<br/><br/><br/><br/><br/><br/><br/>
5)<b> Electricity Charges: </b>The licensee herein shall pay the electricity bills directly for energy
consumed on the licensed premises and should submit original receipts to Licensor indicating that
the electricity bills are paid.<br/><br/>

6) <b>Use:</b> That the Licensed premises shall only be used by the Licensee for <b>'.$row['propertyusage'].'</b>
purpose.The Licensee shall maintain the said premises in its existing condition and damage, if any,
caused to the said premises, the same shall be repaired by the Licensee at its own cost subject to
normal wear and tear. The Licensee shall not do anything in the said premises which is or is likely
to cause a nuisance to the other occupants of the said building or to the prejudice in any manner to
the rights of Licensor in respect of said premises or shall not do any unlawful activities prohibited
by State or Central Government .<br/><br/>
7) <b>Alteration:</b> That the Licensee shall not make or permit to do any alteration or addition to the
construction or arrangements (internal or external) to the Licensed premises without previous
consent in writing from the Licensor.<br/><br/>
8) <b>No Tenancy:</b>That the Licensee shall not claim any tenancy right and shall not have any right to
transfer, assign, and sublet or grant any license or sub-license in respect of the Licensed Premises
or any part thereof and also shall not mortgage or raise any loan against the said premises.<br/><br/>
9) <b>Inspection:</b> That, the Licensor shall on reasonable notice given by the Licensor to the Licensee
shall have a right of access either by himself / herself / themselves or through authorized
representative to enter, view and inspect the Licensed premises at reasonable intervals.<br/><br/>
10)<b> Lock in period:</b> Both the parties have agreed to set a lock-in period of <b>'.$row['lockinperiod'].'</b>  months during which
neither the Licensor shall ask the licensee to vacate the premises, nor the licensee shall vacate the
premises on his own during the lock-in period.In spite of this mandatory clause, if the licensee
leaves the premises for whatsoever reason, he shall pay to the Licensor license fee for the
remaining lock-in period at the rate of agreed upon in the agreement. On the other hand, Licensor
shall compensate the Licensee for loss and inconvenience caused to the Licensee if he has been
asked to vacate the premises.<br/><br/>

11) <b>Cancellation:</b> That, Subject to the condition of lock in period (if any), if the Licensee commits
default in regular and punctual payments of monthly compensation as herein before mentioned or
commit/s breach of any of the terms, covenants and conditions of this agreement or if any
legislation prohibiting the Leave and License is imposed, the Licensor shall be entitled to revoke
and / or cancel the License hereby granted, by giving notice in writing of one month and the
Licensee too will have the right to vacate the said premises by giving a notice in writing of one
month to the Licensor as mentioned earlier.<br/><br/>
12) <b>Possession:</b> That the immediately at on the expiration or termination or cancellation of this
agreement the Licensee shall vacate the said premises without delay with all his goods and
belongings. In the event of the Licensee failing and / or neglecting to remove himself and / or his
articles from the said premises on expiry or sooner determination of this Agreement ,the Licensor
shall be entitled to recover damages at the rate of double the daily amount of compensation per
day and or alternatively the Licensor shall be entitled to remove the Licensee and his belongings
from the Licensed premises, without recourse to the Court of Law.<br/><br/>
13) <b>Furniture and Appliances:</b> The said premises is having the Furniture and Appliances
mentioned in the Schedule II. The licensee shall maintain the said Furniture and <br/><br/><br/><br/><br/>Appliances in the
said premises in its existing condition and damage, if any, caused to the said Furniture and
Appliances, the same shall be repaired by the Licensee/s at its own cost subject to normal wear
and tear<br/><br/>
15) <b>Registration:</b> This Agreement is to be registered and the expenditure of Stamp duty and
registration fees and incidental charges, if any, shall be borne by the <b>'.$row['registrationcharges'].'</b>
<h2 align="center">SCHEDULE I</h2>
<center>(Being the correct description of premise Apartment/Flat which is the subject matter of these
presents)</center>
<br/><br/>
All that constructed portion being <b>'.$row['propertyusage'].'</b> unit bering Flat No.<b>'. $row['flatno'].'	</b>, Build up:<b>'.$row['areasqft'].'</b>
Sq.Ft. Situated on <b>'.$row['floorno'].' </b>floor of Building known as <b>'.$row['buildnm'].' </b>standing on the land bearing<b> '. $row['plotnooo'].'</b>: <b>'.$row['plotno'].'</b> Road:<b> 
'.$row['roadsector'].' </b>Location:<b>'.$row['location'].'</b>,<b> '.$row['villagecity'].', PIN:'.$row['pincode'].'</b>

<h2 align="center">SCHEDULE II</h2>
<center>
(Being the correct description of Furniture and Appliances in the premises)</center>
<br/><br/>
<table width="500px" height="400px"  border="4px;" align="center" bordercolor="#000000">

<tr >
  <td ><b>Sr No</b></td>
  <td ><b>Item</b></td>
  <td ><p><b>Number of
    Units</b></p>
    </td>
</tr>
<tr >
<td >1</td>
  <td >Fan</td>
  <td ><p>'.$row['fan']	.'</p>
    </td>
</tr>
<tr >
<td >2</td>
  <td >AC</td>
  <td ><p>'.$row['ac'].'</p>
    </td>
</tr>
<tr >
<td >3</td>
  <td >Cupbooard</td>
  <td ><p>'.$row['cupbooard'].'</p>
    </td>

</tr>
<tr >
<td >4</td>
  <td >Bed</td>
  <td ><p>'.$row['bed']	.'</p>
    </td>

</tr>
<tr ><td >5</td>
  <td >Washing Machine</td>
  <td ><p>'.$row['washingmachine'].'</p>
    </td>
</tr>
<tr >
<td >6</td>
  <td >Watercooler</td>
  <td ><p>'.$row['watercooler']	.'</p>
    </td>

</tr>
<tr >
<td >7</td>
  <td >Sofa</td>
  <td ><p>'.$row['sofa'].'</p>
    </td>

</tr>
<tr >
<td >8</td>
  <td >Gyser</td>
  <td ><p>'.$row['gyser'].'</p>
    </td>

</tr>
<tr ><td >9</td>
  <td >Table</td>
  <td ><p>'.$row['table'].'</p>
    </td>

</tr>
</table>
</div></center>';


}


else if($num1 != '0')
{
$row=(mysqli_fetch_array($data1));

echo '<center><div align="justify" class="block">
      1) Name:<b> '.$row['lfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['llastnm'].'</b></font>, Age :<b>'.$row['lage'] .'</b> Years, PAN:<b> '.$row['lpan'].'</b>
Aadhaar: <b>'.$row['ladharno'].'</b> Residing at: Flat No:<b>'.$row['lflatno'].'</b>,Building Name:<b>'.$row['lbuildnm'].'</b> Block Sector/Road:<b>'.$row['lroadsector'].'</b>,
 <b>'.$row['llocation'].'</b>,<b>
 '. $row['lcityvillage'].'</b>,<b>'. $row['lpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include the Licensor above
named and also his/her/their respective heirs, successors, assigns, executors and administrators)
<br/>
<center>AND</center><br/>
1) Name:<b> '.$row['tfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['tlastnm'].'</b></font>, Age :<b>'.$row['tage'] .'</b> Years, PAN: <b>'.$row['tpan'].'</b>
Aadhaar:<b> '.$row['tadharno'].'</b> Residing at: Flat No:<b>'.$row['tflatno'].'</b>,Building Name:<b>'.$row['tbuildnm'].'</b> Block Sector/Road:<b>'.$row['troadsector'].'</b>, <b>'.$ropw['tlocation'].'</b>,<b>'. 
$row['tocation'].'</b>,<b>'. $row['tpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include only Licensee
above named).<br/><br/>
WHEREAS the Licensor is absolutely seized and possessed of and or otherwise well and
sufficiently entitled to all that constructed portion being unit described in Schedule I hereunder
written and are hereafter for the sake of brevity called or referred to as Licensed Premises and
is/are desirous of giving the said premises on Leave and License basis under Section 24 of the
Maharashtra Rent Control Act, 1999.<br/><br/>
AND WHEREAS the Licensee herein is in need of temporary premises for his<b> '.$row['propertyusage'].' </b>use
has/have approached the Licensor with a request to allow the Licensee herein to use and occupy
the said premises on Leave and License basis for a period of <b>'.$row['totalduraton'].'</b> Months commencing from<br/>
<b>'.$row['startdate'].'</b> and ending on , on terms and subject to conditions hereafter appearing.<br/><br/>
AND WHEREAS the Licensor have agreed to allow the Licensee herein to use and occupy the
said Licensed premises for his aforesaid<b> '.$row['propertyusage'].'</b> purposes only, on Leave and License basis
for above mentioned period, on terms and subject to conditions hereafter appearing;<br/><br/>
<font style="font-size:19px;" >
NOW THEREFORE IT IS HEREBY AGREED TO, DECLARED AND RECORDED BY AND
BETWEEN THE PARTIES HERETO AS FOLLOWS:-</font><br/><br/>
1)<b> Period:</b> That the Licensor hereby grants to the Licensee herein a revocable leave and license,
to occupy the Licensed Premises, described in Schedule I hereunder written without creating any
tenancy rights or any other rights, title and interest in favour of the Licensee for a period of<b> '.$row['totalduraton'].'</b>
Months commencing from <b>'.$row['startdate'].' </b>and ending on. <br/><br/>
2)<b> License Fee & Deposit:</b>That the Licensee shall pay to the Licensor License at the rate of Rs<b> '.$row['montlyrent'].'</b>
for the use of the said Licensed premises.The amount of monthly compensation License fee shall be payable within first five days of the
concerned month of Leave and License. Licensees shall also pay to the Licensor Rs. <b>'.$row['depositeamount'].'</b>
interest free refundable deposit, for the use of the said Licensed premises.<br/><br/>
3) <b>Payment of Deposit:</b> That the Licensee have paid / shall pay the above mentioned
deposit/premium as mentioned above by Cash. Amount Rs.<b>'.$row['depositeamount'].'/-</b>
<br/><br/>
4)<b> Maintenance Charges:</b> That the all outgoings including all rates, taxes, levies, assessment,
maintenance charges, non occupancy charges, etc. in respect of the said premises shall be paid
by the Licensor.<br/><br/><br/><br/><br/><br/><br/>
5)<b> Electricity Charges: </b>The licensee herein shall pay the electricity bills directly for energy
consumed on the licensed premises and should submit original receipts to Licensor indicating that
the electricity bills are paid.<br/><br/>

6) <b>Use:</b> That the Licensed premises shall only be used by the Licensee for <b>'.$row['propertyusage'].'</b>
purpose.The Licensee shall maintain the said premises in its existing condition and damage, if any,
caused to the said premises, the same shall be repaired by the Licensee at its own cost subject to
normal wear and tear. The Licensee shall not do anything in the said premises which is or is likely
to cause a nuisance to the other occupants of the said building or to the prejudice in any manner to
the rights of Licensor in respect of said premises or shall not do any unlawful activities prohibited
by State or Central Government .<br/><br/>
7) <b>Alteration:</b> That the Licensee shall not make or permit to do any alteration or addition to the
construction or arrangements (internal or external) to the Licensed premises without previous
consent in writing from the Licensor.<br/><br/>
8) <b>No Tenancy:</b>That the Licensee shall not claim any tenancy right and shall not have any right to
transfer, assign, and sublet or grant any license or sub-license in respect of the Licensed Premises
or any part thereof and also shall not mortgage or raise any loan against the said premises.<br/><br/>
9) <b>Inspection:</b> That, the Licensor shall on reasonable notice given by the Licensor to the Licensee
shall have a right of access either by himself / herself / themselves or through authorized
representative to enter, view and inspect the Licensed premises at reasonable intervals.<br/><br/>
10)<b> Lock in period:</b> Both the parties have agreed to set a lock-in period of <b>'.$row['lockinperiod'].'</b>  months during which
neither the Licensor shall ask the licensee to vacate the premises, nor the licensee shall vacate the
premises on his own during the lock-in period.In spite of this mandatory clause, if the licensee
leaves the premises for whatsoever reason, he shall pay to the Licensor license fee for the
remaining lock-in period at the rate of agreed upon in the agreement. On the other hand, Licensor
shall compensate the Licensee for loss and inconvenience caused to the Licensee if he has been
asked to vacate the premises.<br/><br/>

11) <b>Cancellation:</b> That, Subject to the condition of lock in period (if any), if the Licensee commits
default in regular and punctual payments of monthly compensation as herein before mentioned or
commit/s breach of any of the terms, covenants and conditions of this agreement or if any
legislation prohibiting the Leave and License is imposed, the Licensor shall be entitled to revoke
and / or cancel the License hereby granted, by giving notice in writing of one month and the
Licensee too will have the right to vacate the said premises by giving a notice in writing of one
month to the Licensor as mentioned earlier.<br/><br/>
12) <b>Possession:</b> That the immediately at on the expiration or termination or cancellation of this
agreement the Licensee shall vacate the said premises without delay with all his goods and
belongings. In the event of the Licensee failing and / or neglecting to remove himself and / or his
articles from the said premises on expiry or sooner determination of this Agreement ,the Licensor
shall be entitled to recover damages at the rate of double the daily amount of compensation per
day and or alternatively the Licensor shall be entitled to remove the Licensee and his belongings
from the Licensed premises, without recourse to the Court of Law.<br/><br/>
13) <b>Furniture and Appliances:</b> The said premises is having the Furniture and Appliances
mentioned in the Schedule II. The licensee shall maintain the said Furniture and <br/><br/><br/><br/><br/>Appliances in the
said premises in its existing condition and damage, if any, caused to the said Furniture and
Appliances, the same shall be repaired by the Licensee/s at its own cost subject to normal wear
and tear<br/><br/>

15) <b>Registration:</b> This Agreement is to be registered and the expenditure of Stamp duty and
registration fees and incidental charges, if any, shall be borne by the <b>'.$row['registrationcharges'].'</b>
<h2 align="center">SCHEDULE I</h2>
<center>(Being the correct description of premise Apartment/Flat which is the subject matter of these
presents)</center>
<br/><br/>
All that constructed portion being <b>'.$row['propertyusage'].'</b> unit bering  Build up:<b>'.$row['areasqft'].'</b>
Sq.Ft. Situated on  shop/godown known as <b>'.$row['shopnm'].' </b>standing on the land bearing<b> '. $row['plotnooo'].'</b>: <b>'.$row['plotno'].'</b> Road:<b> 
'.$row['roadsector'].' </b>Location:<b>'.$row['location'].'</b>,<b> '.$row['villagecity'].', PIN:'.$row['pincode'].'</b>


</div></center>';


}


else if($num2 != '0')
{
$row=(mysqli_fetch_array($data2));

echo '<center><div align="justify" class="block">
      1) Name:<b> '.$row['lfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['llastnm'].'</b></font>, Age :<b>'.$row['lage'] .'</b> Years, PAN:<b> '.$row['lpan'].'</b>
Aadhaar: <b>'.$row['ladharno'].'</b> Residing at: Flat No:<b>'.$row['lflatno'].'</b>,Building Name:<b>'.$row['lbuildnm'].'</b> Block Sector/Road:<b>'.$row['lroadsector'].'</b>,
 <b>'.$row['llocation'].'</b>,<b>
 '. $row['lcityvillage'].'</b>,<b>'. $row['lpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include the Licensor above
named and also his/her/their respective heirs, successors, assigns, executors and administrators)
<br/>
<center>AND</center><br/>
1) Name:<b> '.$row['tfirstnm'].'</b><font style="padding-left:5px;"><b>'.$row['tlastnm'].'</b></font>, Age :<b>'.$row['tage'] .'</b> Years, PAN: <b>'.$row['tpan'].'</b>
Aadhaar:<b> '.$row['tadharno'].'</b> Residing at: Flat No:<b>'.$row['tflatno'].'</b>,Building Name:<b>'.$row['tbuildnm'].'</b> Block Sector/Road:<b>'.$row['troadsector'].'</b>, <b>'.$row['tlocation'].'</b>,<b>'. 
$row['tocation'].'</b>,<b>'. $row['tpincode'] .'</b>
HEREINAFTER called ‘the Licensor (which expression shall mean and include only Licensee
above named).<br/><br/>
WHEREAS the Licensor is absolutely seized and possessed of and or otherwise well and
sufficiently entitled to all that constructed portion being unit described in Schedule I hereunder
written and are hereafter for the sake of brevity called or referred to as Licensed Premises and
is/are desirous of giving the said premises on Leave and License basis under Section 24 of the
Maharashtra Rent Control Act, 1999.<br/><br/>
AND WHEREAS the Licensee herein is in need of temporary premises for his<b> '.$row['propertyusage'].' </b>use
has/have approached the Licensor with a request to allow the Licensee herein to use and occupy
the said premises on Leave and License basis for a period of <b>'.$row['totalduraton'].'</b> Months commencing from<br/>
<b>'.$row['startdate'].'</b> and ending on , on terms and subject to conditions hereafter appearing.<br/><br/>
AND WHEREAS the Licensor have agreed to allow the Licensee herein to use and occupy the
said Licensed premises for his aforesaid<b> '.$row['propertyusage'].'</b> purposes only, on Leave and License basis
for above mentioned period, on terms and subject to conditions hereafter appearing;<br/><br/>
<font style="font-size:19px;" >
NOW THEREFORE IT IS HEREBY AGREED TO, DECLARED AND RECORDED BY AND
BETWEEN THE PARTIES HERETO AS FOLLOWS:-</font><br/><br/>
1)<b> Period:</b> That the Licensor hereby grants to the Licensee herein a revocable leave and license,
to occupy the Licensed Premises, described in Schedule I hereunder written without creating any
tenancy rights or any other rights, title and interest in favour of the Licensee for a period of<b> '.$row['totalduraton'].'</b>
Months commencing from <b>'.$row['startdate'].' </b>and ending on. <br/><br/>
2)<b> License Fee & Deposit:</b>That the Licensee shall pay to the Licensor License at the rate of Rs<b> '.$row['montlyrent'].'</b>
for the use of the said Licensed premises.The amount of monthly compensation License fee shall be payable within first five days of the
concerned month of Leave and License. Licensees shall also pay to the Licensor Rs. <b>'.$row['depositeamount'].'</b>
interest free refundable deposit, for the use of the said Licensed premises.<br/><br/>
3) <b>Payment of Deposit:</b> That the Licensee have paid / shall pay the above mentioned
deposit/premium as mentioned above by Cash. Amount Rs.<b>'.$row['depositeamount'].'/-</b>
<br/><br/>
4)<b> Maintenance Charges:</b> That the all outgoings including all rates, taxes, levies, assessment,
maintenance charges, non occupancy charges, etc. in respect of the said premises shall be paid
by the Licensor.<br/><br/><br/><br/><br/><br/><br/>
5)<b> Electricity Charges: </b>The licensee herein shall pay the electricity bills directly for energy
consumed on the licensed premises and should submit original receipts to Licensor indicating that
the electricity bills are paid.<br/><br/>

6) <b>Use:</b> That the Licensed premises shall only be used by the Licensee for <b>'.$row['propertyusage'].'</b>
purpose.The Licensee shall maintain the said premises in its existing condition and damage, if any,
caused to the said premises, the same shall be repaired by the Licensee at its own cost subject to
normal wear and tear. The Licensee shall not do anything in the said premises which is or is likely
to cause a nuisance to the other occupants of the said building or to the prejudice in any manner to
the rights of Licensor in respect of said premises or shall not do any unlawful activities prohibited
by State or Central Government .<br/><br/>
7) <b>Alteration:</b> That the Licensee shall not make or permit to do any alteration or addition to the
construction or arrangements (internal or external) to the Licensed premises without previous
consent in writing from the Licensor.<br/><br/>
8) <b>No Tenancy:</b>That the Licensee shall not claim any tenancy right and shall not have any right to
transfer, assign, and sublet or grant any license or sub-license in respect of the Licensed Premises
or any part thereof and also shall not mortgage or raise any loan against the said premises.<br/><br/>
9) <b>Inspection:</b> That, the Licensor shall on reasonable notice given by the Licensor to the Licensee
shall have a right of access either by himself / herself / themselves or through authorized
representative to enter, view and inspect the Licensed premises at reasonable intervals.<br/><br/>
10)<b> Lock in period:</b> Both the parties have agreed to set a lock-in period of <b>'.$row['lockinperiod'].'</b>  months during which
neither the Licensor shall ask the licensee to vacate the premises, nor the licensee shall vacate the
premises on his own during the lock-in period.In spite of this mandatory clause, if the licensee
leaves the premises for whatsoever reason, he shall pay to the Licensor license fee for the
remaining lock-in period at the rate of agreed upon in the agreement. On the other hand, Licensor
shall compensate the Licensee for loss and inconvenience caused to the Licensee if he has been
asked to vacate the premises.<br/><br/>

11) <b>Cancellation:</b> That, Subject to the condition of lock in period (if any), if the Licensee commits
default in regular and punctual payments of monthly compensation as herein before mentioned or
commit/s breach of any of the terms, covenants and conditions of this agreement or if any
legislation prohibiting the Leave and License is imposed, the Licensor shall be entitled to revoke
and / or cancel the License hereby granted, by giving notice in writing of one month and the
Licensee too will have the right to vacate the said premises by giving a notice in writing of one
month to the Licensor as mentioned earlier.<br/><br/>
12) <b>Possession:</b> That the immediately at on the expiration or termination or cancellation of this
agreement the Licensee shall vacate the said premises without delay with all his goods and
belongings. In the event of the Licensee failing and / or neglecting to remove himself and / or his
articles from the said premises on expiry or sooner determination of this Agreement ,the Licensor
shall be entitled to recover damages at the rate of double the daily amount of compensation per
day and or alternatively the Licensor shall be entitled to remove the Licensee and his belongings
from the Licensed premises, without recourse to the Court of Law.<br/><br/>
13) <b>Furniture and Appliances:</b> The said premises is having the Furniture and Appliances
mentioned in the Schedule II. The licensee shall maintain the said Furniture and <br/><br/><br/><br/><br/>Appliances in the
said premises in its existing condition and damage, if any, caused to the said Furniture and
Appliances, the same shall be repaired by the Licensee/s at its own cost subject to normal wear
and tear<br/><br/>

15) <b>Registration:</b> This Agreement is to be registered and the expenditure of Stamp duty and
registration fees and incidental charges, if any, shall be borne by the <b>'.$row['registrationcharges'].'</b>
<h2 align="center">SCHEDULE I</h2>
<center>(Being the correct description of premise Apartment/Flat which is the subject matter of these
presents)</center>
<br/><br/>
All that constructed portion being <b>'.$row['propertyusage'].'</b> unit bering  Build up:<b>'.$row['areasqft'].'</b>
Sq.Ft. Situated on  Building known as <b>'.$row['buildnm'].' </b>standing on the land bearing<b> '. $row['plotnooo'].'</b>: <b>'.$row['plotno'].'</b> Road:<b> 
'.$row['roadsector'].' </b>Location:<b>'.$row['location'].'</b>,<b> '.$row['villagecity'].', PIN:'.$row['pincode'].'</b>

<h2 align="center">SCHEDULE II</h2>
<center>
(Being the correct description of Furniture and Appliances in the premises)</center>
<br/><br/>
<table width="500px" height="400px"  border="4px;" align="center" bordercolor="#000000">

<tr >
  <td ><b>Sr No</b></td>
  <td ><b>Item</b></td>
  <td ><p><b>Number of
    Units</b></p>
    </td>
</tr>
<tr >
<td >1</td>
  <td >Fan</td>
  <td ><p>'.$row['fan']	.'</p>
    </td>
</tr>
<tr >
<td >2</td>
  <td >AC</td>
  <td ><p>'.$row['ac'].'</p>
    </td>
</tr>
<tr >
<td >3</td>
  <td >Cupbooard</td>
  <td ><p>'.$row['cupbooard'].'</p>
    </td>

</tr>
<tr >
<td >4</td>
  <td >Bed</td>
  <td ><p>'.$row['bed']	.'</p>
    </td>

</tr>
<tr ><td >5</td>
  <td >Washing Machine</td>
  <td ><p>'.$row['washingmachine'].'</p>
    </td>
</tr>
<tr >
<td >6</td>
  <td >Watercooler</td>
  <td ><p>'.$row['watercooler']	.'</p>
    </td>

</tr>
<tr >
<td >7</td>
  <td >Sofa</td>
  <td ><p>'.$row['sofa'].'</p>
    </td>

</tr>
<tr >
<td >8</td>
  <td >Gyser</td>
  <td ><p>'.$row['gyser'].'</p>
    </td>

</tr>
<tr ><td >9</td>
  <td >Table</td>
  <td ><p>'.$row['table'].'</p>
    </td>

</tr>
</table>
</div></center>';


}

else
{
//echo "not data";
 echo "<script type='text/javascript'>alert('You  First Fillup The Form')
                         </script>";
 echo "<script language='javascript' type='text/javascript'>location.href='rentagreement.php'
               </script>";
}
?>

</body>
</html>
					