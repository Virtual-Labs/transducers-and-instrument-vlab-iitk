
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
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p><?php /*?><?php
$today = date("l F d, Y");
print("$today");
if($today == "Sunday") 
{
$bgcolor = "#FEF0C5";
}
elseif($today == "Monday")
{
$bgcolor = "#FFFFFF";
} 
elseif($today == "Tuesday") 
{
$bgcolor = "#FBFFC4";
} 
elseif($today == "Wednesday")
{
$bgcolor = "#FFE0DD";
} 
elseif($today == "Thursday")
{
$bgcolor = "#E6EDFF";
} 
elseif($today == "Friday") 
{
$bgcolor = "#E9FFE6";
} 
else 
{
// Since it is not any of the days above it must be Saturday
$bgcolor = "#F0F4F1";
}
print("<body bgcolor=\"$bgcolor\">\n"); 
?><?php */?>
      </div>
  </div>
</div></div>
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
				
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="about_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="about_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="about_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="theory4.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="theory5.php">Experiment.No-5 <br>Rotameter</a>
				<a href="theory6.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="procedure14.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="procedure15.php">Experiment.No-5 <br>Rotameter</a>
				<a href="procedure16.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>


<?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
    <div align="right"><font color="#009933">Logged as <?php echo $_SESSION['user']; ?> |  </font>
  | <a href="http://172.26.82.106/virtuallab/php/logout.php">                           Logout</a> 
  </p>
    </div>
    
<span class="style4"></span>
<!-- end #menu -->
	          <span class="style4"></span>
   
		<div id="page"><span class="style4"></span>
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><html>

<head>
<title>JavaScriptKit.com Multiple Choice Quiz Script</title>

<style>
.qheader{
font:bold 14px Arial;
}

.qselections{
font:normal 13px Arial;
}
</style>

<script src="quizconfigggg1.js">
</script>

<script>

/***********************************************
* JavaScriptKit.com Multiple Choice Quiz Script (http://www.javascriptkit.com)
* Copyright 2003 JavaScript Kit- http://www.javascriptkit.com
* This notice and footnote must stay intact for use
* Visit JavaScript Kit (http://www.javascriptkit.com/) for full source code
***********************************************/

var actualchoices=new Array()
document.cookie="ready=yes"
</script>



<body bgcolor="#FFFFFF">

<!--Comments on configuring quiz script-->
<!--Change the questions below any way you want, but make note of the following:-->
<!--1) Perserve the <FORM> tags -->
<!--2a) Inside each radio button, use the VALUE attribute to denote each question's choices: "a", "b", "c" etc.-->
<!--2b) Inside each radio button, use the NAME attribute to denote which question the button belongs to ("question1", "question2" etc-->
<!--3) Script supports unlmited # of questions. Be sure to edit .js file to enter corresponding solutions-->

<p align="center">

<form method="POST" name="myquiz">

<font face="Arial"><big><big>Quiz</big></big></font></p>

<div class="qheader">

1)	A thermocouple ammeter is used to measure a 10 MHz sine wave and it indicates a current of 2 A in a pure resistance.  The peak current in  this wave from is ?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) 2.83 A<br>
<input type="radio" value="b" name="question1">b) 0.2 A<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
2) The thermocouple instrument will measure  ?</div>

<div class="qselections">
<input type="radio" value="a" name="question2">a) voltage<br>
<input type="radio" value="b" name="question2">b) flux<br>
<input type="radio" value="c" name="question2">c) current<br>


<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
3) Which multiple of basic unit is ‘atto’   ?</div>
<div class="qselections">

<input type="radio" value="a" name="question3">a) 10/<sup>-18</sup><br>
<input type="radio" value="b" name="question3">b) 10/<sup>-15</sup><br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
4) Thermistors have  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) high and positive temperature coefficient<br>

<input type="radio" value="b" name="question4">b) high and negative temperature coefficient<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
5) Which of the following statements is wrong for thermocouple measuring instruments  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) If calibrated on d.c., they cannot be used for a.c. signals<br>
<input type="radio" value="b" name="question5">b) Their calibration does not change with time or temperature.<br>

<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
6) Thermocouple used in ratio micrometer and thermo-galvanometer is  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) copper constantan couple <br>
<input type="radio" value="b" name="question6">b) antimony-bismuth couple<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
7) Which of the following devices can be used to give an indication for temperature changes ?</div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) Bourdon gauges <br>
<input type="radio" value="b" name="question7">b) Thermister<br>
<input type="radio" value="c" name="question7">c) Thermocouple<br>
<input type="radio" value="d" name="question7">d) All of these<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->

</div>

<br>

<div class="qheader">
8) In a thermocouple temperature transducer, the output voltage is generally measured by a ?</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) high resistance voltmeter<br>

<input type="radio" value="b" name="question8">b) high resistance milli-voltmeter<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->

</div>

<br>

<div class="qheader">
9) If the temperature increases by 10°C, the resistivity of a thermistor is likely to become ?</div>
<div class="qselections">
<input type="radio" value="a" name="question9">a) one fiftieth of initial value <br>
<input type="radio" value="b" name="question9">b) one half of initial value<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
10)	Bolometer are used for measurement of ?</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) thermal radiations<br>
<input type="radio" value="b" name="question10">b) temperature input<br>
<!--<input type="radio" value="c" name="question10">c) Europe<br>-->
</div>

</form>

<form>
<div align="center">
<input type="button" value="Grade Me!" name="B1" onClick="gradeit()"> <input type="button" value="Reset" name="B2" onClick="document.myquiz.reset()"></div>
</form>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

			  </div>
			</div>
			</div>
			<div class="post"><div class="post-bgtop"><div class="post-bgbtm"><div class="entry">
			  
				</div>
			</div>
			</div>
			</div>
		<div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.</p>
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
						<li><a href="LVRTE90min.exe">LabVIEW2009 Runtime Engine</a><span>Download</span></li>
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
		<p> Transducer &amp; Instrumentation  Virtual Lab - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>








