 
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
.style3 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
		  
		  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p>
				  
	  </div></div></div></div>
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
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
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

</div><?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
<div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as <?php echo $_SESSION['user']; ?></font>
    <a href="logout.php" style="padding-right:10px;">Logout</a>
</div>
<?php } ?>  

	          <!-- end #menu -->
   
		<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><a href="#">Quiz</a></h1>
				
				<div class="entry"><font color="#000099"><b>Note-</b><b>Fill all the question</b></font>
					 <br>
   <?php
$qid = "Quiz ID-00";
?>

<title><? echo "iit kanpur"; ?></title>

<p><h3><? echo "SiteName $qid"; ?></h3></p>
<form action="results.html" method="post">

<p>1.) which type of sensors are used to measure temperature?<br>
<input type="radio" name="q1" value="Temperature sensor"> Temperature sensor<br>
<input type="radio" name="q1" value="Acoustic sensor"> Acoustic sensor</p>
<p>2.) which hardware is used in the process of data acquisition?<br>
<input type="radio" name="q2" value="DAQ"> DAQ<br>
<input type="radio" name="q2" value="Transducer"> Transducer</p>
<p>3.) A transducer converts<br>
<input type="radio" name="q3" value="One form of energy to the other"> One form of energy to the other<br>
<input type="radio" name="q3" value="One form to another"> One form to another</p>
<p>4.) Graphical interface in labview is called<br>
<input type="radio" name="q4" value="Virtual instrument"> Virtual instrument<br>
<input type="radio" name="q4" value="Virtual design"> Virtual design </p>
<p>5.) A device that measures a physical quantity and converts it into a signal which can be read by an observer or by an instrument<br>
<input type="radio" name="q5" value="sensors"> sensors<br>
<input type="radio" name="q5" value="actuator"> actuator</p>
<p>6.) Active sensors require:<br>
<input type="radio" name="q6" value="An external sorce of excitation"> An external sorce of excitation<br>
<input type="radio" name="q6" value="An internal sorce of excitation"> An internal sorce of excitation</p>
<p>7.) which of those are passive sensors? <br>
<input type="radio" name="q7" value="Thermocouple"> Thermocouple<br>
<input type="radio" name="q7" value="RTD"> RTD</p>
<p>8.)Sensors are also called as <br>
<input type="radio" name="q8" value="Input transducer"> Input transducer<br>
<input type="radio" name="q8" value="Output transducer"> Output transducer</p>
<p>9.)A sensor with two dissimilar metal join together? <br>
<input type="radio" name="q9" value="Thermistor"> Thermistor<br>
<input type="radio" name="q9" value="Thermocouple"> Thermocouple</p>
<p>10.)The computer receive raw data through? <br>
<input type="radio" name="q10" value="DAQ device"> DAQ device<br>
<input type="radio" name="q10" value="Sensor"> Sensor</p>
<p>11.) A terminal or pin at which you can measure or generate an analog or digital signal?<br>
<input type="radio" name="q11" value="Physical channel"> Physical channel<br>
<input type="radio" name="q11" value="Virtual channel"> Virtual channel</p>
<p>12.) Labview uses a-<br>
<input type="radio" name="q12" value="Graphical programming language"> Graphical programming language<br>
<input type="radio" name="q12" value="Virtual programming language"> Virtual programming language</p>
<p>13.) The process of conversion of the samples obtained from physical condition in to digital value that can be readable by a computer for manipulation?<br>
<input type="radio" name="q13" value="Data acquisition"> Data acquisition<br>
<input type="radio" name="q13" value="Data collection"> Data collection</p>
<p>14.) An interface b/w the signal and pc?<br>
<input type="radio" name="q14" value="DAQ hardware"> DAQ hardware<br>
<input type="radio" name="q14" value="DAQ software"> DAQ software </p>
<p>15.) The data acquisition palette containing all the VIS necessary to perform analog i/o,digital i/o and counter timer operation<br>
<input type="radio" name="q15" value="The DAQmx"> The DAQmx<br>
<input type="radio" name="q15" value="Vision assistant"> Vision assistant</p>
<p>16.) A sensor of mechanical motion?<br>
<input type="radio" name="q16" value="Encoder"> Encoder<br>
<input type="radio" name="q16" value="Decoder"> Decoder</p>
<p>17.) Temperature sensing ckts are also called? <br>
<input type="radio" name="q17" value="Temperature sensors"> Temperature sensors<br>
<input type="radio" name="q17" value="Actuators"> Actuators</p>
<p>18.)Device which having output signals which repeat over the range of motion? <br>
<input type="radio" name="q18" value="Incremental encoders"> Incremental encoders<br>
<input type="radio" name="q18" value="Decremental encoders"> Decremental encoders</p>
<p>19.)Device which analyse a variable resistor to convert an angle or displacement to a resistance/voltage? <br>
<input type="radio" name="q19" value="Pontentiometers"> Pontentiometers<br>
<input type="radio" name="q19" value="Stachiometers"> Stachiometers</p>
<p>20.)The computer receive raw data through? <br>
<input type="radio" name="q20" value="DAQ device"> DAQ device<br>
<input type="radio" name="q20" value="Sensor"> Sensor</p>

<p><input type="submit" name="submit" value="Submit Quiz"></p>
<input type="hidden" name="qp" value="quiz00.php">
</form> <!--<a href="quiz'01.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEXT</a>--></div>
			</div>
			</div>
			</div>
			<!--<div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
				
				
				<div class="entry">
					<p></div>

			</div>
			</div>
			</div>
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				
							<div class="entry">
					<p></div>
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
		<p> Transducer &amp; Instrumentation Virtual Lab - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>


 
 
