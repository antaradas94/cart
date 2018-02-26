<html>
<head>
<script src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="head_style.css"/>
<script>

$(function(){
	$("#header").load("head.php");
});

</script>
</head>
<body style="background-color:rgba(0,0,255,0.2);">
	<div id="header" name="header"></div><br/>
<form id="submitAdmin" name="submitAdmin" action="admin_login.php" method="post" onsubmit="return validateAdmin()">
	<hr>
	<div id="adminpage" name="adminpage">Admin Log In</div>
	<hr><br/>
	<div id="admin" name="admin">
	<table id="tadmin" name="tadmin" align="center">
		<tr>
			<td>Name : </td>
			<td><input id="aname" name="aname" type="text"/></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input id="apwd" name="apwd" type="password"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="sub" name="sub" type="submit" value="Log In"/></td>
			<td></td>
		</tr>
	</table>
	</div>
</form>
<form id="submituser" name="submituser" action="user_login.php" method="post" onsubmit="return validateuser()">
	<hr>
	<div id="userpage" name="userpage">User Log In</div>
	<hr><br/>
	<div id="user" name="user">
	<table id="tuser" name="tuser" align="center">
		<tr>
			<td>Email : </td>
			<td><input id="eid" name="eid" type="email"/></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input id="pwd" name="pwd" type="password"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="sub" name="sub" type="submit" value="Log In" /></td>
			
		</tr>
	</table>
	
	</div>
	
</form>
<form method="post" action="signUp.html">
			<input id="reg" name="sub" type="submit" value="Registration" /></form>
<script type="text/javascript">
function validateAdmin()
{


	var nm=document.getElementById("name").value;
	
	
	if(nm==null||nm=="")
	{
		alert("Enter Admin Name");
		return false;
	}

	if(nm.length>20)
	{
		alert("Admin Name : Max length should be <= 20");
		return false; 
	}
	
	var x=document.forms["submitAdmin"]["pwd"].value;
	
	if(x==null||x=="")
	{
		alert("Enter PASSWORD");
		return false;
	}
	if(x.length>=20)
	{
		alert("Please enter valid PASSWORD");
		return false;
	}
}

function validateuser()
{
	
	var num=document.forms["submituser"]["eid"].value;
	var at=x.indexOf("@");
	var dot=x.lastIndexOf(".");
	
	if(x==null||x=="")
	{
		alert("Enter Email ID");
		return false;
	}
	if(x.length>=50)
	{
		alert("Please enter valid e-mail id");
		return false;
	}
	if(at<1||dot<=at+2||dot+2>=x.length)
	{
		alert("Not a valid e-mail address");
		return false;
	}
	
	
	var x=document.forms["submituser"]["pwd"].value;
	
	
	if(x==null||x=="")
	{
		alert("Enter PASSWORD");
		return false;
	}
	if(x.length>=20)
	{
		alert("Please enter valid PASSWORD");
		return false;
	}

	
}
</script>


</body>
</html>