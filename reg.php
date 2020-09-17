<?php
ob_start();
?>
<html>
<head>
<title>
Registration Form
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
	top:82%;
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
	margin-top: 10%;
}
</style>

</head>
<body>
<form class="container" action="reg.php" method="post">

<div class="center">
<h2>Register Here</h2>
<hr>
<div class="down">
<input type="text" name="t1" class="toleft" placeholder="Name">
<br><br>
<input type="text" name="t2" class="toleft" placeholder="Email" required>
<br><br>
<input type="password" name="t3" class="toleft" placeholder="Password" required>
<br><br>
<input type="date" name="t4" class="toleft" placeholder="DOB">
<br><br>
</div>
</div>

<center>
<input type="submit" value="Register" name="btn1" class="btn">
</center>

</body>
</html>

<?php
if(isset($_POST['btn1'])){
	session_start();
$_SESSION['t1'] = $_POST['t1'];
$_SESSION['t2'] = $_POST['t2'];
$_SESSION['t3'] = $_POST['t3'];
$_SESSION['t4'] = $_POST['t4'];



header("refresh:1; URL='login.php'");
}