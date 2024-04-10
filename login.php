<html>

<head>


<style>

body{

	background-image:url(img/b1.JPG);
	background-size:cover;

}

</style>

<link rel="stylesheet" href="table.css" />
</head>
<body>

<marquee>
<h2 style="color:blue;font-size:20px;" >Admin/Guide  Login Form</h2>
</marquee>
<form name=f1 action="chklogin.php" method=post >

<table align=center class=signup>

<tr>
<td>Choose login type</td>
<td>
<select name=ltype id=ltype>
<option value=#>-- Login type --</option>
<option value=admin>Admin</option>
<option value=guide>Guide</option>
</td>
</tr>

<tr>
<td>
User name
</td>
<td>
<input type=text name=uname id=uname placeholder="User Name" />
</td>
</tr>

<tr>
<td>
Password
<td>
<input type=password name=pwd id=pwd placeholder="Password" />
</td>
</tr>

<tr>
<td colspan=2 align=center>
<input type=submit value="Login" name=submit/>
</td>
</tr>

</form>
</table>

</body>

</html>