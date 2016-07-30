<?php
session_start();
include('mysqli_connect.php');
if(isset($_SESSION["sub"]) && isset($_SESSION["class"]))
{
	$subject=$_SESSION["sub"];	
	$class=$_SESSION["class"];
}
if(isset($_POST['submit']) && $_POST['attendance']!="" && $_POST['total']!="")
{
	$total=$_POST['total'];
	$updatetotal="select ".$subject." from class_".$class."_total";
	$resulttotal=mysqli_query($dbcon,$updatetotal);
	if($checkupdate=mysqli_num_rows($resulttotal)>0)
	{
		$record=mysqli_fetch_array($resulttotal);		
		$total+=$record[0];
		$updatetotal="update class_".$class."_total set ".$subject."=".$total;
		$resulttotal=mysqli_query($dbcon,$updatetotal);
	}
	foreach($_POST['en_no'] as $en_no)
	{
		$attendance=$_POST['attendance'][$en_no];
		$sql="select ".$subject." from class_".$class." where en_no=".$en_no;
		$result=mysqli_query($dbcon,$sql);
		if($check=mysqli_num_rows($result)>0)
		{
			$record=mysqli_fetch_array($result);
			$record[0]+=$attendance;
			$update="update class_".$class." set ".$subject."=".$record[0]." where en_no=".$en_no;
			$update_result=mysqli_query($dbcon,$update);			
		}
	}
}
else
{
	echo "<script>alert('Fill all the fields!!');
	window.location.assign('add.php');	
	</script>";	
}
?>
<html>
<head><title></title></head>
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
</style>
<body>
<div>
<a href="logout.php" class="button">LogOut</a>
</div>
<div class="main_container">
<a href="view.php" class="button">View Attendance</a>
</div>
</body>
</html>