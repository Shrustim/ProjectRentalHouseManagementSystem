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
width:134px;
height:70px;
box-sizing: border-box;
line-height:55px;
float:left;
text-align:center;
list-style:none;}

ul li a{
color:#FFFFFF;
text-decoration:none;
    font-size: 23px;
      
	   font-family: sans-serif;
	   display:block;
}
ul li a:hover
{
       background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 300%;
      border-radius: 60px;
      color: #000000;
	  width:134px;
height:70px;
	  
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}
  
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


<ul>
     <li style="background: linear-gradient(110deg,#999999,#990033,#990066,#990066);"> <a href="adminb.php">Home</a></li>

   <li> <a href="feedback.php" style="font-size:18px;" >Feedback</a></li>

   
    <li> <a href="userinfo.php" style="font-size:18px;" >UserInfo</a></li>
   
   <li> <a href="houseinfo.php" style="font-size:18px;" >HousesInfo</a></li>
   
   <li> <a href="flatinfo.php" style="font-size:18px;"  >flatinfo</a></li>
   
  
   
    <li> <a href="shopinfo.php" style="font-size:18px;" >shopinfo</a></li>
	
    <li> <a href="godowninffo.php" style="font-size:18px;" >godowninfo</a></li>
	
    <li> <a href="membershipinfo.php" style="font-size:18px;" >memberships</a></li>
	
    <li> <a href="appointinfo.php" style="font-size:18px;" >Appointments</a></li>
   
   <li> <a href="Logout.php"style="font-size:18px;"  >Logout</a></li>

</ul>
   <br/><br/><br/><br/><br/><h1 style="color:#FFFFFF; font-size:24px" align="center"><i><u>ADMIN</u></i></h1>
<br/> <br/><br/>
<br/> 
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
