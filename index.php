<!doctype html>
<?php
if(isset($_POST['txt_uname'])&& isset($_POST['txt_pswd']))
{
	include('functions.php');
	login();
}	
?>
<html>
<head><title>LoginPage</title>
<style>
body{
	background:url('images/bg1.jpg') no-repeat fixed center center;
	background-size:cover;
	overflow-y:hidden;
}
.main_container{	
	margin:15% 35% 0% 37%;
	text-align:center;
	background-color:white;
	position:absolute;
	width: 320px;
	
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    
	
}
.input_text
{
	height:20px;
	color:gray;
}
.button {
    background-color: #ff656c;
    border: none;
    color: white;
    padding: 8px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {
	border:2px solid #ff656c;
    background-color: white;
    color: #ff656c;
	padding: 6px 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
td{
	padding:5px 5px;
}
p
{
	color:#ff656c;
	margin:0px;
	padding:0px;
	font-size:20px;
}
</style>
</head>
<body>
<div class="main_container">
<form action="index.php" method="post">
<table style="padding-left:18px">
<tr>
<td width="50px"><p>Username</p></td>
<td align=left><input class="input_text" type="text" name="txt_uname" placeholder="username"/></td>
</tr>
<tr>
<td><p>Password</p></td>
<td align=left><input class="input_text" type="password" name="txt_pswd" placeholder="password"/></td>
</tr>
<tr>
<td></td>
<td style="text-align:left;padding-left:40px;"><input type="submit" class="button" value="Log In"></td>
</tr> 
</table>
</form>
</div>
</body>
</html>