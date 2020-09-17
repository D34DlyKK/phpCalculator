<?php
ob_start();
?>

<html>
<head>
<title>
Confirm Details
</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	background-color: #393939;
	font-family: 'Roboto', sans-serif;

}

h2{
	font-size: 18px;
}

.center{
	position:absolute;
	display:inline-block;
	left:0%;
	right:0%;
	top:5px;
	text-align: center;	

}


input{
	
	box-shadow:0.5px 0.5px 6px inset #9F9F9F;
	border: none;
	padding: 7px 30px 7px 30px;
	border-radius: 3px;
	text-align:center;
}

.p1{
	position:absolute;
	text-align:center;
	left: 0px;
	right: 0px;
}

.p2{
	position:absolute;
	text-align:center;
	left: 0px;
	right: 0px;
	color: red;
	font-weight:bold;
}

hr{
	width:20%;
}
.container{
	position:absolute;
	display: inline-block;
	padding: 180px 140px;
	top:14%;
	left:37%;
	background-color: white;
	box-shadow:6px 6px 15px #000000;
	border-radius: 10px;
}

.btn{
	left:25%;
	right: 0%;
	top:75%;
	box-shadow: 2px 2px 8px #5F655E;
	padding:5px 50px 5px 50px;
	background-color: #1DAD00;
	color: white;
	border: none;
	border-radius: 5px;
	cursor:pointer;
	position: absolute;
}

.btn:hover{
	background-color: #3B8A41; 
}

.down{
	margin-top: 15%;
}

.pElse {
	position: absolute;
	display: inline-block;
	left: 0px;
	right: 0px;
	text-align: center;
	top: 85%;
	font-size: 12px;
	font-weight: bold;
	color: red;
}

</style>

</head>
<body>
<form class="container" action="reset.php" method="post">

<div class="center">
<h2>Reset your Password</h2>
<hr>
<div class="down">
<input type="text" name="text1" class="toleft" placeholder="Enter Your Name">
<br><br>
<input type="text" name="text2" class="toleft" placeholder="Enter Your Email" required>
<br><br>
<input type="date" name="text3" class="toleft" placeholder="Enter Your DOB">
<br><br>

</div>
</div>

<center>
<input type="submit" value="Confirm" name="btn2" class="btn">
</center>

</body>
</html>

<?php

if(isset($_POST['btn2']))
{
	session_start();
	$name = $_POST['text1'];
	$email = $_POST['text2'];
	$dob = $_POST['text3'];
	$a=$_SESSION['t1'];
	$b=$_SESSION['t2'];
	$d=$_SESSION['t4'];

if ($name == $a && $email == $b && $dob == $d){
	header("location: newPass.php");
}
else{
	header("refresh: 2; URL='reset.php'");
	echo "<p class='pElse'>Details Not Matched!! Try Again.</p>";
}

}
?>