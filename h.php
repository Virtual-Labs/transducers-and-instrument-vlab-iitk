<?php 
// Database included
include ('connect.php');
//Value submited that given by user at the click on button
if(isset($_POST['Submit'])=='Submit')
{
$user_email=$_POST['User_Email'];
$md5pass=md5($_POST['Password']);
$referer = $_SERVER['HTTP_REFERER'];
// Insert value in the database by executing the INSERT query
$sql = "SELECT * FROM login WHERE 
            User_Email_Id = '$user_email' AND 
            Password = '$md5pass' AND User_Activation_Status='1'"; 
$result = mysql_query($sql);
$num=mysql_num_rows($result);
if($num!=0) 
{
// Session has been started
session_start();
list($userid,$user_email)=mysql_fetch_row($result);
//Put the useremail in the variable for continuing the session in further pages
$a=$_POST['User_Email'];
$_SESSION['user']=$a;
header('Location: use.php');
exit();
}
else
{
header("Location: login.php?msg=Invalid Login or please firstly you have to verification on email.");
exit();	
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Lab - IIT kanpur</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
	  
	  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
					<br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p></div></div>
					<div id="menu">
		<ul>
		      <li><a href="index.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;</strong>Home&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;<span class="style7">&nbsp;Experiment</span>s</a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>People<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;FAQs&nbsp;<strong>&nbsp;</strong>&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp; </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;</a></li>
			   <li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        VLab &nbsp;&nbsp;&nbsp;&nbsp; </a></li>  
        </ul>
</div>
	</div>
<div>
<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:

1.  Copy the coding into the BODY of your HTML document  -->
      
  <!-- STEP ONE: Paste this code into the BODY of your HTML document  -->
      
<BODY><div id="date" align="right">
  <table width="960" height="52" border="0">
 
  <tr>
    <td width="396"><div id="date2"> <font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b> <span id="clock">
      <script language="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- Original:  Chris (javascript@crashedstar.com) -->
<!-- Web Site:  http://www.crashedstar.com/ -->

<!-- Begin
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
function getthedate()
{
  var mydate=new Date()
  var year=mydate.getYear()
  if (year < 1000)
      year+=1900
  var day=mydate.getDay()
  var month=mydate.getMonth()
  var daym=mydate.getDate()
  if (daym<10)
     daym="0"+daym
  var hours=mydate.getHours()
  var minutes=mydate.getMinutes()
  var seconds=mydate.getSeconds()
  var dn="AM"
  if (hours>=12)
     dn="PM"
  if (hours>12)
  {
    hours=hours-12
  }


  //{
     var d = new Date();
     Time24H = new Date();
     Time24H.setTime(d.getTime() + (d.getTimezoneOffset()*60000) + 3600000);
     InternetTime = Math.round((Time24H.getHours()*60+Time24H.getMinutes()) / 1.44);
      //if (InternetTime < 10) InternetTime = '00'+InternetTime;
     //else if (InternetTime < 100) InternetTime = '0'+InternetTime;
  //}


  if (hours==0)
      hours=12
  if (minutes<=9)
     minutes="0"+minutes
  if (seconds<=9)
    seconds="0"+seconds
  //change font size here
  var cdate=dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" , "+hours+":"+minutes+" "+dn+" "
  if (document.all)
     document.all.clock.innerHTML=cdate
  else if (document.getElementById)
     document.getElementById("clock").innerHTML=cdate
  else
    document.write(cdate)
}


if (!document.all&&!document.getElementById)
getthedate()


function goforit()
{
   if (document.all||document.getElementById) 
      setInterval("getthedate()",1000)
}




window.onload=goforit
//  End -->
  </script>
    </span> </b> </font></div></td>
    <td width="128">&nbsp;</td>
   <td width="169" align="right"><b><font color="#001100">share:</font></b><a href="http://www.facebook.com/pages/TI-Virtuallab-IITK/222640487750783" target="_blank" style="padding-left:04px;"><img src="images/facebook-logo-180x66.gif" />
 </a><a href="http://www.twitter.com/TI_Virtual_Lab" target="_blank"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="Follow TI_Virtual_Lab on Twitter"/></a></td>
  </tr>
  </table>
</div>

<!-- Script Size:  2.32 KB -->

<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->

	<div id="date" align="right">
      <!--	 <form name="form1" method="post" action="#">
	<table> 
	<tr><td width="7%">First_Name</td><td width="7%"><input type="text" name="First_Name"></td>
    <td width="7%">Password</td>
    <td width="7%"><input type="password" name="Password" ></td>
    <td colspan="2">
    <input name="Submit" type="submit" value="Registration"></td><td align="left">-->
	  <a href="/virtuallab/Myregistration.php" style="padding-left:04px;"><font color="#000099"><b>Registration</b></font></a><a href="/virtuallab/login.php" style="padding-left:20px;"><font color="#000099"><b>LOG IN </b></font></a></td>
	  <!--</tr>
     </table></form> -->  
          <!-- end #menu -->
</div><?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
 <div id="content">
	  <div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
			<div class="entry">
			
<h4><font color="#006666">
</font><div align="left"><font color="#006666">Please Register <span class="style2">/</span> Login to view further......</font></div>
</h4>
<div align="center" class="style10">
<br/>
<a href="/virtuallab/Myregistration.php" style="text-decoration:none;"><font color="#000099" size="+2"><b>NEW USER</b></font></a><span class="style1"> /</span><a href="/virtuallab/login.php" style="text-decoration:none;"><font color="#000099" size="+2"><b> LOGIN </b></font></a></div>
 
 
            </div>
	</div>
		  </div>
		</div>
	  </div>
		<!-- end #content -->
<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp; 
					</p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/" target="blank">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/" target="blank">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help</h2>
					<div align="center"><ul><a href="h.php">
						<img id="comm100_ButtonImage.jpg" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a>
					</ul>
				</li>



</div>
</div>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p> Transducer &amp; Instrumentation  Virtual Lab - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</div>

</body>
</html>
