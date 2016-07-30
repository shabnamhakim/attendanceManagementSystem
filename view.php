<?php
session_start();
if($_SESSION['t_id']==null)
{
	
	header('Location: index.php'); 
}
?>

<html>
<head></head>
<style>
body{
	background:url('images/bg1.jpg') no-repeat fixed center center;
	background-size:cover;	
	color:gray;
}
.main_container{
	text-align:center;
	margin-left:10%;
	margin-right:10%;
	border-top:5px solid #ff656c;
	width:80%;	
	background-color:white;
	position:absolute;	
    
}
p
{
	color:#ff656c;
	margin:0px;
	padding:0px;
	font-size:28px;
}
p1
{	
	color:gray;
	margin:0px;
	padding:0px;
	font-size:20px;
}
.input_text
{
	height:25px;
	color:gray;
}
td{
	padding:5px 5px;
}
.button {
	margin-left:15px;
    background-color: #ff656c;
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {	
	border:2px solid #ff656c;
    background-color: white;
    color: #ff656c;
	padding: 4px 13px;
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
</div>
<div class="main_container">
<form method="post">
<?php
include('functions.php');
show();
?>
</from>
</div>
</body>
</html>

