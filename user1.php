<?php 
include ('connect.php');
session_start();
if(isset($_SESSION['user']))
{
$sql="select * from login where User_Email_Id='$_SESSION[user]'";
$sqlq=mysql_query($sql);
$fet=mysql_fetch_array($sqlq);
}
?>
<?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Lab - IIT kanpur</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/chromestyle.css" />
<script src="js/chrome.js"></script>
<!--<link rel="stylesheet" type="text/css" href="js/chrome.js" />-->
<style type="text/css">
<!--
.style2 {color: #0066FF}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
		  
		  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p>
      </div>
  </div>
</div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
		      <li><a href="use.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;</strong>Home&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="experiment.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;<span class="style7">&nbsp;Experiment</span>s</a></li>
		      <li><a href="contactp.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>People<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="faq.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;FAQs&nbsp;<strong>&nbsp;</strong>&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="contact.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us </a></li>
		      <li><a href="feedback.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;</a></li>
			   <li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        VLab &nbsp;&nbsp;&nbsp;&nbsp; </a></li>
      </ul>
	</div>
	</div>
			<!--dropbox1-->
			<div id="dropmenu1" class="dropmenudiv">

				<a href="aim_of_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="aim_of_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="aim_of_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="aim_of_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="aim_of_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="aim_of_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="aim_of_exp6.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="aim_of_exp7.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="aim_of_exp8.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="aim_of_exp9.php">Experiment.No-10 <br>Speed Measurement</a>
				
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="about_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="about_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="about_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="about_exp6.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="about_exp7.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="about_exp8.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="about_exp9.php">Experiment.No-10 <br>Speed Measurement</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="theory4.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="theory5.php">Experiment.No-5 <br>Rotameter</a>
				<a href="theory6.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="theory7.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="theory8.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="theory9.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="theory10.php">Experiment.No-10 <br>Speed Measurement</a>
				
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="procedure14.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="procedure15.php">Experiment.No-5 <br>Rotameter</a>
				<a href="procedure16.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="procedure17.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="procedure18.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="procedure0.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="procedure1.php">Experiment.No-10 <br>Speed Measurement</a>
				</div>	
	<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:

  1.  Copy the coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->

<BODY><br />

<div id="date">
<font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>
<span id="clock">

<SCRIPT LANGUAGE="JavaScript">

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

</span>
</b>
</font>
</div>

<!-- Script Size:  2.32 KB -->

<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->
<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->
<p align="center"></p>
<form action="Google_search_results.php" id="cse-search-box" >
  <div>
    <input type="hidden" name="cx" value="013069836288472481273:yf_kbl-8lly" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
	<table width="240" cellpadding="3" cellspacing="5" align="center">
   <tr align="center">
    <td>
        <input type="text" name="q" size="31" />
   <br /></td>

    <td>
      <option value="google.com"></b></option>
        <!--<option value="lycos.com">lycos</option>-->
		 
		             
   <br /></td>

    <td><input type="submit" name="sa" value="Search" /></td>
	 <td><input type="reset" name="sa" value="reset" /></td>
  </div>
</form>
</tr>
</table>

<!--</div>-->

<?php
//session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
    <div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as:&nbsp;  <?php echo $_SESSION['user']; ?></font>
  <a href="/virtuallab/logout.php" style="padding-right:10px;">Logout</a><a href="user.php">Update Profile</a> 
  </p>
    </div>
    <?php } ?>  

<?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
 <div id="content">
	  <div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
			<div class="entry">
<h1>
  <p><b><font color="#006666"><div style="padding-left:40px"> Welcome to Virtual Labs-IIT Kanpur </div></font></b></p>
</h1><h4><font color="#006666"><div style="padding-left:100px">Transducer &amp; Instrumentation Virtual Laboratory </div></font></h4>
<h1><div style="padding-left:190px" >User Profile </div></h1>
<form id="form1" name="form1" method="post" action="">
  <div align="left" style="padding-left:90px;">
    <table width="530" border="0" 0 cellpadding="0" height="700">
      <tbody>
      <tr>
        <td width="200" height="28"><span class="style6"> First Name</span></td>
        <td width="220"><?php echo $fet['First_Name'];?></td>
		
        </tr>
      <tr>
        <td height="28"><span class="style6">Middle Name</span></td>
        <td><?php echo $fet['Middle_Name'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Last Name</span></td>
        <td><?php echo $fet['Last_Name'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">User Email</span></td>
        <td><?php echo $fet['User_Email_Id'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Security Question</span> </td>
        <td><?php echo $fet['Security_Question'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Security Answer</span> </td>
        <td><?php echo $fet['Security_Answer'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Date Of Birth</span></td>
        <td><?php echo $fet['Date_of_Birth'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Mobile Number</span></td>
        <td><?php echo $fet['Cellphone'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Affiliation</span></td>
        <td><?php echo $fet['Affiliation'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Place</span></td>
        <td><?php echo $fet['Place'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Pin Code</span></td>
        <td><?php echo $fet['Zip_Code'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Country</span></td>
        <td><?php echo $fet['Country'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Profession</span></td>
        <td><?php echo $fet['Profession'];?></td>
        </tr>
      <tr>
        <td height="28"><span class="style6">Qualification</span></td>
        <td><?php echo $fet['Qualification'];?></td>
        </tr>
	        <tr>
        <td colspan="2"  height="61" align="center"><a href="Regedit.php?index=<?php echo $fet['User_Id'];?>"><button>
        <div align="center">EDIT</div>
        </button></a></td>
		
      </tr> 
      </tbody></table>
  </div>
  
</form></div>
			  </div>
		  </div>
		</div>
	  </div>
	  <div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp;</p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help</h2>
					<div align="center"<ul>
						<!-- BEGIN Comm100 Live Chat Button Code --><link href="http://chatserver.comm100.com/css/comm100_livechatbutton.css" rel="stylesheet" type="text/css"/><div id="comm100_ChatButton"><div id="comm100_warp"><center><div id="comm100_dvhelp"><a class="comm100_ahelp_css" href="http://www.comm100.com/livechat/" onclick="comm100_Chat();return false;" target="_blank" title="Live Chat Software for Website"><img id="comm100_ButtonImage" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a><script src="http://chatserver.comm100.com/js/LiveChat.js?siteId=72715&amp;planId=886&amp;partnerId=-1" type="text/javascript"></script><div id="comm100_track"></div></div><div id="comm100_dvbox" class="comm100_dvbox_css" style="display:none;" onmouseover="this.style.display=''" onmouseout="this.style.display='none'"><div class="comm100_dvcontent_css"><p class="comm100_ptitle_css"><b><a href="http://www.comm100.com/" target="_blank" class="comm100_atitle_css" >Comm100</a> Products:</b></p><ul class="comm100_ulbox_css"><li style="display:none;" class="comm100_onelinone">&nbsp;</li><li><a href="http://www.comm100.com/" target="_blank">Customer Service Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank" >Live Chat Software</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Help</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Chat</a></li></ul></div></div></center></div></div><!-- End Comm100 Live Chat Button Code -->
					</ul>
				</li>
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
