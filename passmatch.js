// JavaScript Document
function Pass_match()
{
	var pass1=document.getElementById("pass1").value;
	var pass2=document.getElementById("pass2").value;
	if(pass1==pass2)
	{
		alert("Password Matched");
	}
	else
	{
		alert("Password Mismatched");
	}
}