
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
width:149px;
height:70px;
box-sizing: border-box;
line-height:55px;
float:left;
text-align:center;
list-style:none;}

ul li a{
color:#FFFFFF;
text-decoration:none;
    font-size: 20px;
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
	  width:149px;
height:70px;
	  
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}
  
 
</style>
</head>

<body>
<div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div>   


<ul>
     <li> <a href="adminb.php">Home</a></li>
   
    <li> <a href="userinfo.php" style="font-size:18px;" >UserInfo</a></li>
   
   <li> <a href="houseinfo.php" style="font-size:18px;" >HousesInfo</a></li>
   
   <li> <a href="flatinfo.php" style="font-size:18px;"  >flatinfo</a></li>
   
  
   
    <li> <a href="shopinfo.php" style="font-size:18px;" >shopinfo</a></li>
	
    <li> <a href="godowninffo.php" style="font-size:18px;" >godowninfo</a></li>
	
    <li style="background: linear-gradient(110deg,#999999,#990033,#990066,#990066);"> <a href="membershipinfo.php" style="font-size:18px;" >memberships</a></li>
	
    <li> <a href="appointinfo.php" style="font-size:18px;" >Appointments</a></li>
   
   <li> <a href="Logout.php"style="font-size:18px;"  >Logout</a></li>

</ul>
<br/><br/><br/>

<br/><br/><h1 style="color:#FFFFFF; font-size:24px" align="center"><i><u>ADMIN</u></i></h1>
<h1 style="color:#FFFFFF; font-size:24px" align="center"><i><u>Membership Information</u></i></h1>
<center>
<div>
<?php 
$query="SELECT * FROM  `creditmembership` ";
         
  $data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

$query2="SELECT * FROM  `debitmembership` ";
         
  $data2=mysqli_query($conn,$query2);
$total2=mysqli_num_rows($data2);

?>
<br/>
<table width="600px" height="300px"  border="4px" bordercolor="#FFFFFF" style="color:#FFFF99; font-size:19px;">

<tr bgcolor=#FFCCFF style="color:#000000;">
  
  <td>Adhar No</td>
  <td>Card No</td>
  <td>Card Holder</td>
  <td>Startdate Membership</td>
  <td>Enddate Membership</td>
  <td>Membership Duration</td>
  <td>Email</td>
  
  <td>Delete</td>
<td>Edit</td>


</tr>
<?php while($result=mysqli_fetch_assoc($data))
   {
   echo "
   <tr style=color:#FFFF99>
    <td>  ".$result['adharno']." </td>
  <td>  ".$result['cardno']." </td>
  <td> ".$result['cardholder']." </td>
 
  
  <td> ".$result['startdatemember']." </td>
  <td> ".$result['enddatemember']." </td>
  <td> ".$result['membership']."</td>
  <td> ".$result['email']."</td>
  
  <td><a href='editmembershipinfo.php?id=$result[id]&adharno=$result[adharno]&cardno=$result[cardno]&cardholder=$result[cardholder]&email=$result[email]'>Edit</a></td>
<td><a href='deletemembership.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>


</tr>";
  }
  
  
   while($result=mysqli_fetch_assoc($data2))
   {
   echo "
   <tr style=color:#FFFF99>
    <td>  ".$result['adharno']." </td>
  <td>  ".$result['cardno']." </td>
  <td> ".$result['cardholder']." </td>
 
  
  <td> ".$result['startdatemember']." </td>
  <td> ".$result['enddatemember']." </td>
  <td> ".$result['membership']."</td>
  <td> ".$result['email']."</td>
  
  <td><a href='editmemberinfo2.php?id=$result[id]&adharno=$result[adharno]&cardno=$result[cardno]&cardholder=$result[cardholder]&startdatemember=$result[startdatemember]
  &enddatemember=$result[enddatemember]
  &membership=$result[membership]&email=$result[email]'>Edit</a></td>
<td><a href='deletemembership2.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>


</tr>";
  }
  
  ?>   
</table>

<script>
function checkdelete()
{
 return confirm('Are you sure you want to delete this users data???');
}

</script>
</div>
</center>

 </body>
 </html>