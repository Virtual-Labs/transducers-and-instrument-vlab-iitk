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
				  
	  </div></div>
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
				<a href="aim_of_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
	<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:

  1.  Copy the coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->

<BODY>
<div id="date" align="right">
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
   <td width="169" align="right"><a href="http://www.facebook.com/pages/TI-Virtuallab-IITK/222640487750783" target="_blank" style="padding-left:04px;"><img src="images/facebook-logo-180x66.gif" />
 </a><a href="http://www.twitter.com/TI_Virtual_Lab" target="_blank"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="Follow TI_Virtual_Lab on Twitter"/></a></td>
  </tr>
  </table>
</div>


<!-- Script Size:  2.32 KB -->








<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->

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
<?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
<div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as :&nbsp;&nbsp;<?php echo $_SESSION['user']; ?>
</font><a href="/virtuallab/logout.php" style="padding-right:10px; text-decoration:none;">Logout</a>
<a href="/virtuallab/user.php" style="padding-right:0px; text-decoration:none;">Update user Profile</a></div>
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
				
				<div class="entry">
					 <p>       A bridge circuit is a type of electronic circuits in which two circuit branches (usually in parallel with each other) are "bridged" by a third branch connected between the first two branches at some intermediate point along them. The bridge was originally developed for laboratory measurement purposes and one of the intermediate bridging points is often adjustable when so used. Bridge circuits now find many applications, both linear and non-linear, including in instrumentation, filtering and power conversion.
<p>The best-known bridge circuit, the Wheatstone bridge, was invented by Samuel hunter Christie and popularized by Charles Wheatstone, and is used for measuring resistance. It is constructed from four resistors, one of which has an unknown value (Rx), one of which is variable (R2), and two of which are fixed and equal (R1 and R3), connected as the sides of a square. Two opposite corners of the square are connected to a source of electric current, such as a battery. A galvanometer is connected across the other two opposite corners. The variable resistor is adjusted until the galvanometer reads zero. It is then known that the ratio between the variable resistor and its neighbor is equal to the ratio between the unknown resistor and its neighbor, and this enables the value of the unknown resistor to be calculated.</p><p>
The Wheatstone bridge has also been developed to measure impedance in AC circuits, resulting in designs such as the Wien Bridge, the Maxwell Bridge and the Heavy side Bridge. All are based on the same principle, which is to compare the output of two Potentiometers haring a common source.</p>
<p>In power supply design, a bridge circuit or bridge rectifier is an arrangement of diodes or similar devices used to rectify an electric current, i.e. to convert it from an unknown or alternating polarity to a direct current of known polarity.In some motor controllers, an H-bridge is used to control the direction the motor turns.</p>


 <h3 class="style4"><font color="#000000">The Basic Bridge Circuit  </font></h3><br>
 <img src="images/brdge11.bmp" alt="" />
 <br>
 <p>The fundamental concept of the Wheatstone Bridge is two voltage dividers, both fed by the same input, as shown to the right. The circuit output is taken from both voltage divider outputs, as shown here.</p><br>
 <p>In its classic form, a galvanometer (a very sensitive dc current meter) is connected between the output terminals, and is used to monitor the current flowing from one voltage divider to the other. If the two voltage dividers have exactly the same ratio (R1/R2 = R3/R4), then the bridge is said to be balanced and no current flows in either direction through the galvanometer. If one of the resistors changes even a little bit in value, the bridge will become unbalanced and current will flow through the galvanometer. Thus, the galvanometer becomes a very sensitive indicator of the balance condition. </p><p>&nbsp;</p>
  
 <br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about_exp21.php">NEXT</a>
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
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp;</p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/" target="_blank">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/" target="_blank">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
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
