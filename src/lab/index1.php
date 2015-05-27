<html>

<head>
<title>DIC ChatBox Beta 1</title>
<link rel="stylesheet" type="text/css" href="css/cb_style.css">

<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/chatbox.js"></script>
</head>

<body onbeforeunload="signInForm.signInButt.name='signOut';signInOut()" onLoad="hideShow('hide')">

<h1>&lt;/DIC&gt; Chat Box</h1>
<form onSubmit="signInOut();return false" id="signInForm">
	<input id="userName" type="text">
	<input id="signInButt" name="signIn" type="submit" value="Sign in">
	<span id="signInName">User name</span>
	</form>

	<div id="chatBox"></div>
	<div id="usersOnLine"></div>
	<form onSubmit="sendMessage();return false" id="messageForm">
		<input id="message" type="text">
		<input id="send" type="submit" value="Send">
<div id="serverRes"></div></form>

</body>
</html>
