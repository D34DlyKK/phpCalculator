<?php
ob_start();
?>

<html>
<head>
<title>
Login Form
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

.reset{
	/*position: absolute;*/
	margin-top: 25%;
	display: inline-block;
	font-size: 10px;
	font-weight: bold;
	text-decoration: none;

}

.reset:hover{
	color:red;
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
	left:27%;
	right: 0%;
	top:62%;
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
	margin-top: 20%;
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
</style>

</head>
<body>
<form class="container" action="login.php" method="post">

<div class="center">
<h2>Login Here</h2>
<hr>
<div class="down">
<input type="text" name="e1" class="toleft" placeholder="Email" required>
<br><br>
<input type="password" name="p1" class="toleft" placeholder="Password" required>
<br><br>
<a class="reset" href="reset.php">Forgot Password?</a>

</div>
</div>

<center>
<input type="submit" value="Login" name="btn2" class="btn">
</center>

</body>
</html>

<?php

if(isset($_POST['btn2']))
{
	session_start();
	$email = $_POST['e1'];
	$password = $_POST['p1'];
	$b=$_SESSION['t2'];
	$c=$_SESSION['t3'];

if ($email == $b && $password == $c){
	header("location: index.php");
}
else{
	echo "<p class='pElse'>Incorrect Email Or Password</p>";
	header("refresh: 1; URL='login.php'");
}

}
?>