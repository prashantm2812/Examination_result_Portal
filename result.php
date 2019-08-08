<?php
session_start();
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
extract($_SESSION['post']);
?>
<html>
<body>
<head>
<style>
table,th,td{
	border:1px solid black;
}
th,td{
	padding:10px;
}
td{
	text-align:center;
}
</style
</head>
<?php
$servername="localhost";
$username="PrashantM";
$password="JXVxHkhPGO8FhfRT";
$database="project";
$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
	die("Connection failed!!".$conn->connect_error);

function show_result($row, $sem){
	$sub1 = $row['sub1'];
	$marks1 = $row['marks1'];
	$grade1 = $row['grade1'];
	
	$sub2 = $row['sub2'];
	$marks2 = $row['marks2'];
	$grade2 = $row['grade2'];
	
	$sub3 = $row['sub3'];
	$marks3 = $row['marks3'];
	$grade3 = $row['grade3'];
	
	$sub4 = $row['sub4'];
	$marks4 = $row['marks4'];
	$grade4 = $row['grade4'];
	
	$sub5 = $row['sub5'];
	$marks5 = $row['marks5'];
	$grade5 = $row['grade5'];
	
	$sub6 = $row['sub6'];
	$marks6 = $row['marks6'];
	$grade6 = $row['grade6'];
	?>
	<table style = "width:30%">
		<th colspan = "3">
			<?php echo $sem ?>
		<th>
		<tr>
			<td><strong>Subject</strong></td>
			<td><strong>Marks</strong></td>
			<td><strong>Grade</strong></td>
		</tr>
		<tr>
			<td><?php echo $sub1?></td>
			<td><?php echo $marks1?></td>
			<td><?php echo $grade1?></td>
		</tr>
		<tr>
			<td><?php echo $sub2?></td>
			<td><?php echo $marks2?></td>
			<td><?php echo $grade2?></td>
		</tr>
		<tr>
			<td><?php echo $sub3?></td>
			<td><?php echo $marks3?></td>
			<td><?php echo $grade3?></td>
		</tr>
		<tr>
			<td><?php echo $sub4?></td>
			<td><?php echo $marks4?></td>
			<td><?php echo $grade4?></td>
		</tr>
		<tr>
			<td><?php echo $sub5?></td>
			<td><?php echo $marks5?></td>
			<td><?php echo $grade5?></td>
		</tr>
		<tr>
			<td><?php echo $sub6?></td>
			<td><?php echo $marks6?></td>
			<td><?php echo $grade6?></td>
		</tr>

	</table>
	<?php
}
$result_tables = array("first_sem", "second_sem");
$semesters = array("Semester 1", "Semester 2");
$sql="select * from verify where username='$name' and password='$passw'";
$result=$conn->query($sql);
if($result->num_rows==0)
{
	echo "Please enter valid username and password";
}
else
{
	$currsem = $sql_currsem = "";
	if(isset($_POST['currsem']))
	{
		$row = $result->fetch_assoc();
		$currsem = $row['semester'];
		$index = $currsem-1;
		$sql_currsem="select * from $result_tables[$index] where username = '$name'";
		$result1 = $conn->query($sql_currsem);
		$sem = $semesters[$index];
		if($result1->num_rows > 0)
		{
			while($row = $result1->fetch_assoc())
			{
				show_result($row, $sem);
			}
		}	
	}
	else if(isset($_POST['allsem']))
	{
		$row = $result->fetch_assoc();
		$allsem = $row['semester'];		
		for($i=0; $i<$allsem; $i++)
		{
			$sql_allsem="select * from $result_tables[$i] where username = '$name'";
			$result1 = $conn->query($sql_allsem);
			$sem = $semesters[$i];
			if($result1->num_rows > 0)
			{
				while($row = $result1->fetch_assoc())
				{
					show_result($row, $sem);
					echo "<br><br>";						
				}
			}
			else
			{
				echo $sql_allsem;
			}
		}
	}
}
$conn->close();
?>
<a href="afterlogin.php" class="btn btn-success btn-lg">BACK</a>		
</body>
</html>