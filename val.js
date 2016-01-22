function validat()
{
	var username = document.getElementById('uname').value;
	var email= document.getElementById('uemail').value;
	var passwrd1= document.getElementById('password1').value;
	var passwrd2= document.getElementById('password2').value;
	if( username!=0 && email!=0 && passwrd1!=0&& passwrd2!=0)
	{
					{
					if(username.length<4)
						{
							alert("please enter username more than four characters");
						}
					else if(email.indexOf('@')==-1||email.indexOf('.com')==-1)
						{
							document.getElementById('email1').innerHTML="please";
							return false;
						}
					else if(passwrd1!=passwrd2)
						{
							alert("please enter correct password");
							return false;
						}
					else if(passwrd1.length<4 || passwrd1.length>8)
						{
							alert("please enter password within range of 4-8");
							return false;
						}
						else
						{
							document.forms["register"].submit();
						}
					}
				}
	else
	{
		alert("plz enter values");
	}
}
function username()
{
	var username = document.getElementById('uname').value;
	if(username.length<4)
		{
			document.getElementById('usname').innerHTML="user name is short";
			return false;
		}else
		{
			document.getElementById('usname').innerHTML="superb";
		}

} 

function email1()
{
	var email= document.getElementById('uemail').value;
	if(email.indexOf('@')==-1||email.indexOf('.com')==-1)
		{
			document.getElementById('semail1').innerHTML="please enter @---.com";
			return false;
		}else
		{
			document.getElementById('semail1').innerHTML="Ok";
		}

}

function password12()
{
		var passwrd1= document.getElementById('password1').value;
		if(passwrd1.length<4 || passwrd1.length>8)
			{
				document.getElementById('spasswor1').innerHTML="please enter password within range of 4-8";
				return false;
			}else
			{
				document.getElementById('spasswor1').innerHTML="Ok";
			}
}
function password21()
{
		var passwrd1= document.getElementById('password1').value;
		var passwrd2= document.getElementById('password2').value;
		if(passwrd1!=passwrd2)
			{
				document.getElementById('spasswor2').innerHTML="please enter correct password";
				return false;
			}else
			{
				document.getElementById('spasswor2').innerHTML="ok";
			}
}