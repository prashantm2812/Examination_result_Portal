<?php
session_start();
?>
<html>
<head>
	
</head>
<body bgcolor="#008080">
<body>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">

*{
 margin: 0px;
 padding:0px;	
}
#menu ul
{
	list-style: none;
}
#menu ul li
{
	background-color: black;
	border: 1px solid white;
	width: 120px;
	height: 35px;
	line-height: 35px;
	text-align: center;
	float: left;
	position: relative;
}
#menu ul li a
{
	text-decoration: none;
	color:red;
	display: block;
}
#menu ul li a
{
	background-color:black;
}
#menu ul li a:hover
{
	background-color:black;
}
#menu ul ul 
{
position: absolute;
display: none;
}
#menu ul li:hover > ul 
{
	display: block;
}
a{
	text-decoration: none;
}
		.pras{
			position: absolute;
            top: 56%;
            right: 47%;
            margin-left: 100px auto;
            align-content: center;
			text-decoration: none;
			color: black;
		}
		.ani{
			position: absolute;
			top: 40%;
			right: 40%;
			width: 300px;
			height: 100px;
			padding: 20px;
			background:rgba(0,0,0,.6);
			margin-left: 100px auto;
			box-shadow: 0px 0px 10px 2px black;
			align-content: center;
			text-decoration: none;
			color: red;
		}
		.anir{
			position: absolute;
			top: 5%;
			right: 10%;
			left: 30%;
			width: 510px;
			height: 30px;
			padding: 30px;
			background:rgba(0,0,0,.6);
			margin-left: 50px auto;
            margin-right: 50px auto;
			box-shadow: 0px 0px 10px 2px black;
			align-content: center;
			text-decoration: none;
			color: red;
		}
	</style>
	<div class="bg">
 </div>
<div id="menu">
	<ul>
			<li><a href="#">About</a>
<ul>
	<li><a href="aboutsite.php">This Site</a></li>
    <li><a href="aboutproject.php">This Project</a></li>
</ul>
			</li>
	</ul>
	
</div>

	<div class="ani">
		<form action = "check.php" method = "post">	
		<table>
			<tr>
	<th>User ID:</th> 
<td><input type="text" name="name" placeholder="RA1611003011095" required><br></td>
</tr>
	<tr>
		<th>Password :
<td><input type="password" name="passw" placeholder="**" required><br></td>
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
if(isset($_SESSION['error']))
{
	echo $_SESSION['error'];
}
?>
<div class="anir">
	<h1>EXAMINATION   RESULT   PORTAL</h1>
</div>
<div class="pras">
				<a href="forgot.php"class="btn btn-success btn-lg">Forget Password</a>
				</div>
</body>
</html>
<?php
	unset($_SESSION['error']);
?>