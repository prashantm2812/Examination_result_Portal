<?php
session_start();
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
extract($_SESSION['post']);
$servername="localhost";
$username="PrashantM";
$password="JXVxHkhPGO8FhfRT";
$database="project";
$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
	die("Connection failed!!".$conn->connect_error);

?>
<div class="ani">
		<form action = "forgot.php" method = "post">	
		<table>
			<tr>
	<th>UserName:</th> 
<td><input type="text" name="name" placeholder="name" required><br></td>
</tr>
			<tr>
	<th>New Password:</th> 
<td><input type="password" name="passw1" placeholder="******" required><br></td>
</tr>
	<tr>
		<th>Confirm Password :
<td><input type="password" name="passw2" placeholder="******" required><br></td>
		</th>
	</tr>
	<tr>
		<td>
			<th>
				<input type="submit" value="SUBMIT">
			</th>
		</td></tr>
</table>
</div>
</form>
<?php
if(isset($_POST['passw1']) && isset($_POST['passw2']))
{
	$passw1 = $_POST['passw1'];
	$passw2 = $_POST['passw2'];
	if($passw1 == $passw2)
	{
		$sql="update verify set password='$passw1' where username='$name'";
		$result=$conn->query($sql);
		$conn->close();
		echo "password changed";
	}
	else
	{
		echo "Please enter same password";
	}
}
?>