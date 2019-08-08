<?php
session_start();
foreach ($_POST as $key => $value)
{
	$_SESSION['post'][$key] = $value;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--<link rel="stylesheet" type="text/css" href="anirudhsubmit.css">-->
<style type="text/css">
body{
			position: absolute;
			top: 20%;
			right: 10%;
			left: 30%;
			width: 550px;
			height: 280px;
			padding: 30px;
			background:rgba(0,0,0,.10);
			margin-left: 50px auto;
            margin-right: 50px auto;
			box-shadow: 0px 0px 10px 2px black;
			align-content: center;
			text-decoration: none;
			color: red;
	}
	/*.aman{
		position: absolute;
		top: 2%;
		width: 2px;
		height: 3px;
		left: 10%;
		padding: 5%;

	}*/
	ul{
		margin: 0;
		padding:0;
        overflow: hidden;

	}
	a:link,a,visited{
		display: block;
		front-weight:bold;
		color:#FFFFFF;
		background-color:  #98bf21;
		width: 120px;
		text-align: center;
		padding: 4px;

	}
	a:hover,active{
		background-color: #7A991A;
		text-decoration: none;
	}
	li{
		float: right;
	}
</style>
<body>
<form action="result.php" method="post">
 <H3> WELCOME TO RESULT PORTAL </H3>
 <h2>Check result for</h2>
 <h4>CURRENT SEMESTER</h4>
 <p>
 	<tr>
<td><th><button type='submit' name='currsem'>Current Semester</button></th></td></tr>
 </p>
 <h4>ALL SEMESTER</h4>
<p>
	<tr>	
	<td><th><button type='submit' name='allsem'>All Semester</button><br></th></td></tr>

</p>
 <ul>
 	<li>
 		<a href="login.php" class="btn btn-success btn-lg">LOGOUT</a>
 	</li>
 </ul>
</form>
</body>	
 	

</html>