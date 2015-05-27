// JavaScript Document
function validate()
{
	alert.focus('ok');
	var name=document.getElementById("name");
	if(name.value == "")
	{
		alert("Please Enter Your Name");
		name.focus();
		return false;
		}
		return true;
	}
