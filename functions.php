<?php
function login()
{
$uname=$_POST['txt_uname'];
$pwd=$_POST['txt_pswd'];
include('mysqli_connect.php');
$query= "select t_id from faculty where uname='".$uname."'and pwd='".$pwd."'";
$result=mysqli_query($dbcon,$query);
$check=mysqli_num_rows($result);
if($check>0)
{	

	session_start();
	
	$row=mysqli_fetch_array($result);
	$_SESSION['t_id']=$row[0];
	echo "<script>window.open('faculty.php','_self')</script>";
	mysqli_close($dbcon);
}
else
{
	
	echo "<script>alert('invalid try again!!');
	window.open('index.php','_self');
	</script>";	
	mysqli_close($dbcon);
}
}

function mylist($id)
{
	include('mysqli_connect.php');	
	$query= "select distinct name,class from subject where t_id='".$id."' group by class";
	$result=mysqli_query($dbcon,$query);
	$check=mysqli_num_rows($result);
	//echo "<table border=1>";
	if($check>0)
	{	
		echo"
		<select name='select_class'>
		        <option value=''>class</option>
		        ";
		while($row=mysqli_fetch_array($result))
		{
		echo "
		<option value='".$row[1]."'>".str_replace('_',' ',$row[1])."</option>";
		}
		echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
		echo "
		<select name='select_subject'>
		        <option value=''>subject</option>";
				
		$result=mysqli_query($dbcon,$query);
		while($row=mysqli_fetch_array($result))
		{
		echo "
		        <option value='".$row[0]."'>".$row[0]."</option>		
		";
		}
		echo "</select>";
	}
	mysqli_close($dbcon);
}

function student_list()
{
$sub=$_POST['select_subject'];
$class=strtolower($_POST['select_class']);
session_start();
$_SESSION["sub"]=$sub;
$_SESSION["class"]=$class;
echo "<p>Class:".str_replace('_',' ',$class)."&nbsp&nbsp&nbsp"."Subject:$sub</p>";
include('mysqli_connect.php');
$sql="SELECT en_no from class_".$class;
$result=mysqli_query($dbcon,$sql);
if($check=mysqli_num_rows($result)>0)
{
	echo '<br>
		<p style="font-size:20px;">Total Number of lectures in this month
		<input type="text" name="total" class="input_text" /></p>
		<table style="padding-right:30%;padding-left:30%;width:100%;">
		<tr>
		<td><p1>Enrollment No.</p1></tds>
		<td><p1>Attendance</p1></td>
		</tr>
	';
	while($record = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>
		<td>'.$record['en_no'].'</td>
		<td><input type="text" class="input_text" name="attendance['.$record['en_no'].']" />
		<input type="hidden" name="en_no[]"value="'.$record['en_no'].'" />
		</td>
		</tr>
		';
	}
	echo '
	<tr>
	<td></td>
	<td><input class="button" type="submit" name="submit" value="add" /></td>
	</tr>
	</table>
	
	';
}
mysqli_close($dbcon);
}
function show()
{
	
	include('mysqli_connect.php');	
	$query= "select distinct class from subject";
	$result=mysqli_query($dbcon,$query);
	$check=mysqli_num_rows($result);
	if($check>0)
	{	
		echo"<br><p1>Please Select Class</p1>
		<select name='select_class'>
		        <option value=''>class</option>
		        ";
		while($row=mysqli_fetch_array($result))
		{
		echo "
		<option value='".$row[0]."'>".str_replace('_',' ',$row[0])."</option>";
		}
		echo "</select> 
		<input type='submit' class='button' value='show' />		
		";
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$class=$_POST['select_class'];
			$sql="SELECT * from class_".$class;
			$result=mysqli_query($dbcon,$sql);
			$sqltotal="select * from class_".$class."_total";
			$resulttotal=mysqli_query($dbcon,$sqltotal);
			$recordtotal=mysqli_fetch_assoc($resulttotal);
			$setotal=$recordtotal['se'];
			$toctotal=$recordtotal['toc'];
			$wttotal=$recordtotal['wt'];
			$dotnettotal=$recordtotal['dotnet'];
			$ajttotal=$recordtotal['ajt'];
			$detotal=$recordtotal['de'];
			$supertotal=$setotal+$toctotal+$wttotal+$dotnettotal+$ajttotal+$detotal;			
			if($check=mysqli_num_rows($result)>0)
			{
				echo '<br><hr>
				<table cellspacing=0 cellpadding=0 style="width:100%; padding-left:20%; padding-right:20%; text-align:center;">
						<tr>
							<th>Enrollment No</th>
							<th>Name</th>
							<th>WT</th>
							<th>SE</th>
							<th>TOC</th>
							<th>AJT</th>
							<th>DOTNET</th>
							<th>DE</th>
							<th>Total Percentage</th>
						</tr>
				
				';
				while($record=mysqli_fetch_assoc($result))
				{
					$en_no=$record['en_no'];
					$name=$record['name'];
					$se=$record['se'];
					$toc=$record['toc'];
					$wt=$record['wt'];
					$dotnet=$record['dotnet'];
					$ajt=$record['ajt'];
					$de=$record['de'];
					$total=$se+$toc+$wt+$dotnet+$ajt+$de;
					$attendance=($total/$supertotal)*100;
					$attendance=round($attendance,2);
					echo '
					<tr>
						<td>'.$en_no.'</td>
						<td>'.$name.'</td>
						<td>'.$se.'</td>
						<td>'.$wt.'</td>
						<td>'.$toc.'</td>
						<td>'.$ajt.'</td>
						<td>'.$dotnet.'</td>
						<td>'.$de.'</td>
						<td>'.$attendance.'%</td>
					</tr>
					';
				}
				echo '</table>';
			}
		}		
	}
}
?>