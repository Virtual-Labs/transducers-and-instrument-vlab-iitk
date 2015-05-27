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
<style type="text/css">
<!--
.style2 {color: #0066FF}
.style4 {font-family: "Times New Roman", Times, serif}
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
	<!-- end #header -->
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
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3">Experiment.No-3 <br>AC and DC Bridges</a>
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
	</div>
	<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:

  1.  Copy the coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->

<BODY>

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
function getthedate(){
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
if (hours>12){
hours=hours-12
}
{
 d = new Date();
 Time24H = new Date();
 Time24H.setTime(d.getTime() + (d.getTimezoneOffset()*60000) + 3600000);
 InternetTime = Math.round((Time24H.getHours()*60+Time24H.getMinutes()) / 1.44);
 //if (InternetTime < 10) InternetTime = '00'+InternetTime;
 //else if (InternetTime < 100) InternetTime = '0'+InternetTime;
}
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
function goforit(){
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
<p align="center"></p>
<form action="Google_search_results.php" id="cse-search-box">
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


<!-- Script Size:  2.32 KB --><?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
<div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as:&nbsp;&nbsp; <?php echo $_SESSION['user']; ?></font>
     <a href="/virtuallab/logout.php" style="padding-right:10px;">Logout</a><a href="user.php">Update User Profile</a></div>
<?php } ?>  
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><font color="#000000"></font>  </h1>
				
				
				<div class="entry"><p>Like other bridge circuits, the measuring ability of a Hay Bridge depends on 'balancing' the circuit. Balancing the circuit in Figure 1 means adjusting R2 and C1 until the current through the ammeter between points A and B becomes zero.  This happens when the voltages at points A and B are equal.  When the Hay Bridge is balanced, it follows that Z1/R1 = R3/Z2 wherein Z1 is the impedance of the arm containing C1 and R2 while Z2 is the impedance of the arm containing L1 and R4.  Thus, Z1 = R2 + 1/(2πfC) while Z2 = R4 + 2πfL1.<br>
   
Mathematically, when the bridge is balanced, <br>
[R2 + 1/(2πfC1)] / R1 = R3 / [R4 + 2πfL1]; or<br>
[R4 + 2πfL1] = R3R1 / [R2 + 1/(2πfC1)]; or<br>
R3R1 = R2R4 + 2πfL1R2 + R4/2πfC1 + L1/C1.<br>


    
When the bridge is balanced, the reactive components are equal, so<br>
2πfL1R2 = R4/2πfC1, or R4 = (2πf)2L1R2C1.<br>
   
Substituting R4, one comes up with the following equation:<br>
R3R1 = (R2+1/2πfC1)((2πf)2L1R2C1) + 2πfL1R2 + L1/C1; or<br>
L1 = R3R1C1 / (2πf)2R22C12 + 4πfC1R2 + 1); or<br>
L1 = R3R1C1 / [1 + (2πfR2C1)2] after dropping the reactive components of the equation since the bridge is balanced.<br>
       
Thus, the equations for L1 and R4 for the Hay Bridge in Figure 1 when it is balanced are:<br>
L1 = R3R1C1 / [1 + (2πfR2C1)2]; and<br>
R4 = (2πfC1)2R2R3R1 / [1 + (2πfR2C1)2] <br> 
Note that the balancing of a Hay Bridge is frequency-dependent.<br>
</p><br>

				<h3 class="style4"><font color="#000000">The Owen Bridge </font></h3><p>An Owen Bridge is an AC bridge circuit used for measuring an unknown inductance by balancing the loads of its four arms, one of which contains the unknown inductance. Figure 1 below shows a diagram of the Owen Bridge. </p><br>
				<img src="images/bridge16.bmp" alt="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about_exp25.php">NEXT</a>
					 <h4 class="style4">&nbsp;</h4>
					 <p>
			  </div>
			</div>
			</div>
			</div>
			<!--<div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
				
				
				<div class="entry">
					<p> 1.Computer running LabVIEW </p>
					    <P>2.National Instruments (NI) USB data acquisition unit</P> 
						<P>3.USB cable</P>
						<P>4.Thermistor temperature sensor</P>
						<P>5. Digital multi-meter that can read resistance Thermometer</P>
						<P>6. Solid wire</P>
						<P>7.vessel of water</p></P></div>
			</div>
			</div>
			</div>-->
			<!--<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				<h2 class="title">Virtual lab Setup</h2>
				<p class="meta">Posted by <a href="#">Sushanth Poojary</a> on March 8, 2010
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments</a>&nbsp; </p>				<div class="entry">
					<p></p>
				</div>
			</div>
			</div>
			</div>-->
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp; <a href="contactp.php"><font color="#0000FF"><b>Project Team</b></font></a></p>
				</li>
				<li>
					<h2>Experiments</h2>
					<ul>
					<li><a href="Simulatedpracticles.php"> Simulated Experiments </a><span> IIT Kanpur </span> </li>
						<li><a href="Realtimepracticles.php"> Realtime Experiments </a><span> IIT Kanpur </span> </li>
							</ul>
				</li>
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Setup</h2>
					<ul>
						<li><a href="LVRTE90min.exe">LabVIEW2009 Runtime Engine (32-bit)</a><span>Download</span></li>
						<li><a href="LVRTE90min64.exe">LabVIEW2009 Runtime Engine(64-bit)</a><span>Download</span></li>
						<li><a href="LVRTE90std.exe">LabVIEW2009 Runtime Engine (Full)</a><span>Download</span></li>
						<!--<li><a href="IE8-WindowsXP-x86-ENU.exe">Explorer Setup</a>&nbsp;<span>Explorer Setup</span></li>
						<li><a href="Firefox Setup 3.6.10.exe">Mozila Firefox Setup</a>&nbsp;<span>Mozila Firefox Setup</span></li>-->
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
		<p>Transducer &amp; Instrumentation lab <a href="#">Virtual Lab - IIT Kanpur </a></p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
