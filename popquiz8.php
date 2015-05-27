
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
</div></div>
</div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
			<li><a href="use.php">Home</a></li>
			<li><a href="#" rel="dropmenu1">Aim of experiment</a></li>
			<li><a href="#" rel="dropmenu2">About experiment</a></li>
			<li><a href="#" rel="dropmenu3">Theory</a></li>
			<li><a href="#" rel="dropmenu4">Procedure</a></li>
			<li><a href="faq.php">FAQs</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
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
<div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as<?php echo $_SESSION['user']; ?>
</font><a href="logout.php" style="padding-right:10px; text-decoration:none;">Logout</a>
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

<script src="quizconfig8.js">
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

1)An Inverse transducer converts ?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a)electrical energy to any other form of energy <br>
<input type="radio" value="b" name="question1">b)electrical energy to light energy <br>
<input type="radio" value="c" name="question1">c)mechanical displacement into electrical signal <br>
<input type="radio" value="d" name="question1">d)electrical energy to mechanical form. <br>
</div>

<br>

<div class="qheader">
2)One of the following can act as an inverse transducer  ?</div>

<div class="qselections">
<input type="radio" value="a" name="question2">a)electrical resistance potentiometer <br>
<input type="radio" value="b" name="question2">b)L.V.D.T. <br>
<input type="radio" value="c" name="question2">c)capacitive transducer <br>
<input type="radio" value="d" name="question2">d)piezo electric crystals. <br>
</div>

<br>

<div class="qheader">
3)One of the following is an active transducer ?</div>
<div class="qselections">

<input type="radio" value="a" name="question3">a)strain gauge   <br>
<input type="radio" value="b" name="question3">b)selsyn <br>
<input type="radio" value="c" name="question3">c)photovoltaic cell <br>
<input type="radio" value="d" name="question3">d)photo emissive cell. <br>
</div>

<br>

<div class="qheader">
4)A strip chart recorder is ?</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a)an active transducer <br>
<input type="radio" value="b" name="question4">b)an inverse transducer <br>
<input type="radio" value="c" name="question4">c)an output transducer <br>
<input type="radio" value="d" name="question4">d)(b) and (c). <br>
</div>

<br>

<div class="qheader">
5)In a transducer, the observed output deviates from the correct value by a constant factor the resulting error is called ?</div>
<div class="qselections">
<input type="radio" value="a" name="question5">a)Zero Error <br>
<input type="radio" value="b" name="question5">b)Sensitivity Error<br>
<input type="radio" value="c" name="question5">c)Sensitivity Error<br>
<input type="radio" value="d" name="question5">d)Hysteresis Error. <br>
</div>

<br>

<div class="qheader">
6)A transducer has an output impedance of   and the load resistance is  , the transducer behaves as ?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a)a constant current source  <br>
<input type="radio" value="b" name="question6">b)a constant voltage source <br>
<input type="radio" value="c" name="question6">c)a constant power source <br>
<input type="radio" value="d" name="question6">d)none of the above. <br>
</div>

<br>

<div class="qheader">
7)If a transducer has an output Impedance of  and a load resistance of  , it behaves as  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question7">a)a constant current source <br>
<input type="radio" value="b" name="question7">b)a constant voltage source <br>
<input type="radio" value="c" name="question7">c)a constant impedance source <br>
<input type="radio" value="d" name="question7">d)none of the above. <br>

</div>

<br>

<div class="qheader">
8)The lower limit of useful working range of a transducer is determined by  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a)minimum useful input level <br>
<input type="radio" value="b" name="question8">b)by transducer error and noise<br>
<input type="radio" value="c" name="question8">c)cross sensitivity <br>
<input type="radio" value="d" name="question8">d)dynamic response. <br>

</div>

<br>

<div class="qheader">
9)While selecting a transducer for a particular application  ?</div>
<div class="qselections">
<input type="radio" value="a" name="question9">a)only the input characteristics should be considered  <br>
<input type="radio" value="b" name="question9">b)only the output characteristics should be considered <br>
<input type="radio" value="c" name="question9">c)only the transfer characteristics should be considered <br>
<input type="radio" value="d" name="question9">d)input, output and transfer characteristics should be considered. <br>
</div>

<br>

<div class="qheader">
10)A cantilever is used as a primary sensing element for measurement of force. The measured deflection 0.5 mm for a particular set up. Suppose each of the dimentions i.e. length, width and thickness of the cantilever are doubled with the force and material of cantilever remaining the same, the deflection of the cantilever is ?</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a)1 mm	<br>
<input type="radio" value="b" name="question10">b)2 mm<br>
<input type="radio" value="c" name="question10">c)0.25 mm<br>
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
					<h2>Experiments</h2>
					<ul>
						<li><a href="http://172.26.82.106:50001/Temperature.html">Study of Temperature Transducers 1<span>(online)</span> </a><span>
						<li><a href="http://172.26.82.106:50001/thermimagiii.html">Study of Temperature Transducers 2<span>(online)</span> </a><span>
						    <a href="therm.rar"><font color="#FF0000">Download (offline) </font></a></span></li>
						<li><a href="http://172.26.82.106:50001/spectra.html">Study of spectrum Analyzer (online)</a><span><a href="Spectrum.rar"><font color="#FF0000">Download (offline)</font></a></font></span></li>
						<li><a href="http://172.26.82.106:50001/Bri.html">Study of AC and DC Bridges (online)</a><span><a href="Bridge.rar"><font color="#FF0000">Download (offline)</font></a></font></span></li>
						<li><a href="http://172.26.82.106:50001/Lissajous_FH-1.html">Study of Frequency and Phase <span>Measurement Using Lissageous</span><span>Patterns (online)</span></a><span><!--<a href="Bridge.rar">--><font color="#FF0000">Download (offline)</font></a> </span></li>
						<li><a href="http://172.26.82.106:50001/rotameter 1.html">Study of Flow Measurement Using <span>Rotameter (online)</span></a><span><!--<a href="Bridge.rar">--><font color="#FF0000">Download (offline)</font></a> </span></li>
						<li><a href="http://172.26.82.106:50001/strain2.html">Study of Weight Measurement Using <span>Strain Gauge (online)</span></a><span><!--<a href="Bridge.rar">--><font color="#FF0000">Download (offline)</font></a> </span></li>
<li><a href="http://172.26.82.106:50001/DAC.html">Study of DAC using R-2R Ladder <span>Network (online)</span></a><span><!--<a href="Bridge.rar">--><font color="#FF0000">Download (offline)</font></a> </span></li>
<li><a href="http://172.26.82.106:50001/DIS.html">Study of Displacement Transducers <span> (online)</span></a><span><!--<a href="Bridge.rar">--><font color="#FF0000">Download (offline)</font></a> </span></li>			
						
						
						<!--<li><a href="http://202.141.40.219:50001/Bri.html">Study of Flow Measurement Using <span>Rotameter (online)</span></a><span><a href="Bridge.rar"><font color="#FF0000">Download (offline)</font></a> </span></li>
						<li><a href="http://202.141.40.219:50001/Lissajous_FH.html">Study of Frequency and Phase <span>Measurement Using Lissageous</span><span>Patterns (online)</span></a><span><a href="Bridge.rar"><font color="#FF0000">Download (offline)</font></a> </span></li>-->
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
