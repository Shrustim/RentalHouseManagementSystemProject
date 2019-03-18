<?php


  session_start();
include_once 'connt.php';

$name=$_SESSION['name'];
if($name==true)
{
#echo '<font color="#FFFFFF">'."Welcome".$useremail.'</font>';
}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='admin.php'
               </script>";
			  
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<style>
body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
  .box{
  position:absolute;
  top:40%;
  left:35%;
  transform: translate(-20%,-20%);
  width:700px;
  height:700px;
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
    
  

   <h1 class="style1" align="center"><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>

  
  
     <center>
 <br/>
<br/>
<br/>


  <div class="box">
     <span></span>
     <span></span>
     <span></span>
     <span></span>
     
  
<div class="content">
    <h1 style="text-shadow:5px 5px 9px yellow;">UPDATE MEMBERSHIP</h1> 
<center>     <p>
    <form action="" method="POST"  enctype="multipart/form-data"  >
      
      
      <h4> Adhar No:   <input style="margin-left:130px;" type="text" size="40" maxlength="12" name="adharno" value="<?php echo $_GET['adharno']; ?>" /> 
         <br/><br/>
        Card No:  <input style="margin-left:140px;" type="text" size="40" maxlength="40" name="cardno" value="<?php echo $_GET['cardno']; ?>" />
          <br/><br/>
         Cardholder: <input style="margin-left:115px;" type="text" size="40" maxlength="40" name="cardholder" value="<?php echo $_GET['cardholder']; ?>" />
        <br/><br/>
        Startdate Membership:<input style="margin-left:30px;" type="text" size="40" maxlength="30" name="propertytype" value="<?php echo $_GET['propertytype']; ?>" />
         <br/><br/>
        Enddate Membership:<input style="margin-left:30px;" type="text" size="40" maxlength="50" name="address" value="<?php echo $_GET['address']; ?>" />
         <br/><br/>
        Membership Duration:<input style="margin-left:30px;"  type="text" size="40" maxlength="10" name="appointdate" value="<?php echo $_GET['appointdate']; ?>" />
         <br/><br/>
          Email:<input style="margin-left:170px;" type="text" size="40" maxlength="10" name="preferedtime" value="<?php echo $_GET['preferedtime']; ?>" />
          <br/><br/>
          Email:<input style="margin-left:170px;" type="text" size="40" maxlength="10" name="novisits" value="<?php echo $_GET['novisits']; ?>" />
       </h4> 
      
      
      
    
    <br />
        <center><input class="button" type="submit" value="Update"
      name="submit" /></center>
    
   
   </form>
   </p> 
   </div>
</div>
</center>
</body>
</html>
<?php
$id=$_GET['id'];
if(isset($_POST['submit']))
{
       
         $adh=($_POST['adharno'] ); 

         $cardno=($_POST['cardno'] ); 
         
         $ch=($_POST['cardholder'] );
         
         $stm= ($_POST['propertytype'] ); 
         
         $edm=($_POST['address'] ); 
         
         $mem=($_POST['appointdate'] ); 
         
         $email=($_POST['preferedtime'] ); 
         
        $novisits=($_POST['novisits'] );  
         

           
		   
		   
		   
		    $query="UPDATE `agreemdebit` SET adharno='$adh',cardno='$cardno',cardholder='$ch',propertytype='$stm',address='$edm',appointdate='$mem',preferedtime='$email'
			,novisits='$novisits'
   WHERE id='$id'";






                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('Update Appointments for  Biometric is  Sucssesfully')
                         </script>";

                         echo "<script language='javascript' type='text/javascript'>location.href='appointinfo.php'
               </script>";


                        }
                     else
                        echo "query not executed";
 }
?>