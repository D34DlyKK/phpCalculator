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
	margin-top: 17%;
}

.pElse {
	position: absolute;
	display: inline-block;
	left: 12%;
	right: 12%;
	text-align: center;
	top: 87%;
	font-size: 9px;
	font-weight: bold;
	color: red;
}

.resetSuccess {
	position: absolute;
	display: inline-block;
	left: 12%;
	right: 12%;
	text-align: center;
	top: 100%;
	font-size: 9px;
	font-weight: bold;
	color: red;

}

</style>

</head>
<body>
<form class="container" action="newPass.php" method="post">

<div class="center">
<h2>Enter a New Password</h2>
<hr>
<div class="down">
<input type="Password" name="pass1" class="toleft" placeholder="New Password">
<br><br>
<input type="password" name="pass2" class="toleft" placeholder="Confirm Password" required>
<br><br>
<p class="pElse">Enter a Combination of at least six numbers, letters and punctuation marks (such as ! and &).</p>

</div>
</div>

<center>
<input type="submit" value="Reset" name="btn2" class="btn">
</center>

</body>
</html>

<?php

if(isset($_POST['btn2']))
{
	session_start();
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

if ($pass1 == $pass2){
	echo "<p class='resetSuccess'>Password Reset Successfully</p>";
	$_SESSION['t3'] = $pass1;
	header("refresh: 1; URL= 'login.php'");
}
else{
	echo "<p class='pElse'>Password not Matched</p>";
	header("refresh: 1; URL='newPass.php'");
}

}
?>