 
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
<form action="resultss.php" method="post">

<p>1.) Power spectrum of the signal is calculated with?<br>
<input type="radio" name="q1" value="TFT"> TFT<br>
<input type="radio" name="q1" value="FFT"> FFT</p>
<p>2.) FFT stands for?<br>
<input type="radio" name="q2" value="Fast Fourier Transform "> Fast Fourier Transform <br>
<input type="radio" name="q2" value="Fourier Fourier Transform"> Fourier Fourier Transform</p>
<p>3.) Which can work with higher frequency?<br>
<input type="radio" name="q3" value=". Analog ">  Analog <br>
<input type="radio" name="q3" value="Digital"> Digital</p>
<p>4.) Optical analyzer can be used to measure the output of?<br>
<input type="radio" name="q4" value="Resistance"> Resistance<br>
<input type="radio" name="q4" value="Light-emitting devices"> Light-emitting devices </p>
<p>5.) Using LabVIEW analysis function we can generate?<br>
<input type="radio" name="q5" value="Step, Tone , Ramp, etc."> Step, Tone , Ramp, etc.<br>
<input type="radio" name="q5" value=". None"> . None</p>
<p>6.) To display generated waveform in preview we use? <br>
<input type="radio" name="q6" value="Generator mode"> Generator mode<br>
<input type="radio" name="q6" value="Waveform Preview"> Waveform Preview</p>
<p>7.) To control frequency we need? <br>
<input type="radio" name="q7" value="Amplitude parameter control"> Amplitude parameter control<br>
<input type="radio" name="q7" value="Frequency parameter control"> Frequency parameter control</p>
<p>8.) To control amplitude we need?<br>
<input type="radio" name="q8" value="Amplitude parameter control"> Amplipier<br>
<input type="radio" name="q8" value="Frequency parameter control"> Frequency parameter control</p>
<p>9.) The cartridge from condensor microphone uses  <br>
<input type="radio" name="q9" value="Basic transduction priciples"> Basic transduction priciples<br>
<input type="radio" name="q9" value="Basic resistance priciples"> Basic resistance priciples</p>
<p>10.) Which device has a natural sensing of acceleration,according to acceleration directly proportional to force? <br>
<input type="radio" name="q10" value="Piezoelectric transducer"> Piezoelectric transducer<br>
<input type="radio" name="q10" value="piezoresistive transducer"> piezoresistive transducer</p>
<p>11.) AC phenomenonons such as vibration or shocks are best used to measure with a? <br>
<input type="radio" name="q11" value="Peizofilm based accelerometer"> Peizofilm based accelerometer<br>
<input type="radio" name="q11" value="Microphones"> Microphones</p>
<p>12.) Name one must common inertial sensor? <br>
<input type="radio" name="q12" value="Accelerometer"> Accelerometer<br>
<input type="radio" name="q12" value="Tachometer"> Tachometer</p>
<p>13.) Which type of sensors require like conditioning <br>
<input type="radio" name="q13" value="Analog accelerometer"> Analog accelerometer<br>
<input type="radio" name="q13" value="Industrial accelerometer"> Industrial accelerometer</p>
<p>14.) Which type of sensors require like conditioning <br>
<input type="radio" name="q14" value="Analog accelerometer"> Analog accelerometer<br>
<input type="radio" name="q14" value="Industrial accelerometer"> Industrial accelerometer</p>
<p>15.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q15" value="Channel width"> Channel width<br>
<input type="radio" name="q15" value="Pulse width"> Pulse width</p>
<p>16.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q16" value="Channel width"> Channel width<br>
<input type="radio" name="q16" value="Pulse width"> Pulse width</p>
<p>17.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q17" value="Channel width"> Channel width<br>
<input type="radio" name="q17" value="Pulse width"> Pulse width</p>
<p>18.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q18" value="Channel width"> Channel width<br>
<input type="radio" name="q18" value="Pulse width"> Pulse width</p>
<p>19.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q19" value="Channel width"> Channel width<br>
<input type="radio" name="q19" value="Pulse width"> Pulse width</p>
<p>20.)  In a pulse width modulated signal the value of acceleration is proportional to <br>
<input type="radio" name="q20" value="Channel width"> Channel width<br>
<input type="radio" name="q20" value="Pulse width"> Pulse width</p>


<p><input type="submit" name="submit" value="Submit Quiz"></p>
<input type="hidden" name="qp" value="quiz00.php">
</form></div>
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


 
 
</body>
</html>
