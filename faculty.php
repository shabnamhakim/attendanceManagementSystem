<html>
<head><title>faculty page</title></head>
<style>
body{
	background:url('images/bg1.jpg') no-repeat fixed center center;
	background-size:cover;
	overflow-y:hidden;
}
.main_container{	
	margin:15% 35% 0% 35%;
	text-align:center;
	background-color:white;
	position:absolute;
	width: 350px;	
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    
	
}
p
{
	color:#ff656c;
	margin:0px;
	padding:0px;
	font-size:20px;
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
select
{
	color:gray;
	height:30px;
	padding:5px 10px;
	font-size:15px;
}
</style>
<body>
<div>
<a href="logout.php" class="button">LogOut</a>
<br>
<br>
<a href="view.php" class="button">View Attendance</a>
</div>
<div class="main_container">
<p>Please select class and subject to countinue</p><br>
<form action="add.php" method="post">
<?php
session_start();
if(isset($_SESSION['t_id']))
{	
	include('functions.php');
	mylist($_SESSION['t_id']);
}
else
{
	header("location:index.php");
}
?>
</br></br>
<input class="button" type="submit" value="Countinue">
</form>
</div>
</body>
</html>