

<?php
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
?>
<?php 
session_start();
include ('connect.php'); 
if (!isset($_GET['usr']) && !isset($_GET['code']) )
{
$msg = "ERROR: Invalid code...";
exit();
}
$rsCode = mysql_query("SELECT Activation_Code from login where User_Email_ID='$_GET[usr]'") or die(mysql_error());
list($acode) = mysql_fetch_array($rsCode);
if ($_GET['code'] == $acode)
{
mysql_query("update login set User_Activation_Status='1' where User_Email_ID='$_GET[usr]'") or die(mysql_error());
echo "<h3>Thank you </h3>Email confirmed and account activated. You can <a href=\"login.php\">login</a> now..";
} else
{ echo "ERROR: Incorrect activation code...not valid"; }
?>

