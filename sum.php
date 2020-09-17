<?php
session_start();
if(isset($_SESSION['t2']))
{
?>
<html>
<head>
<title>
Admin panel
</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>

body{
	background-color: #393939;
	font-family: 'Roboto', sans-serif;
}

h2{
	position: absolute;
	top: 15%;
	text-align: center;
	left: 20%;
	right: 0;
	color: white;
	font-weight: bold;
	
}

.admin{
	color: red;
	font-weight: bold;
	position: absolute;
	top: 1px;
	left: 1%;
	font-size: 20px;
}

.input{
	color: white;
	background-color: #0AC10F;
	font-weight: bold;
	position: absolute;
	top: 2%;
	right: 1%;
	box-shadow: 2px 2px 10px green;
	padding: 5px 40px 5px 40px;
	border-radius: 5px;

	
}

.line{
	border: 2px solid red;
}

.sidebar{
	border-right: 2px solid white;
	display: inline-block;
	height: 100%;
	position: absolute;
	width: 20%;
	text-align: center;
	top: 8%;
}

.side2{
	position: absolute;
	top: 35%;
	text-align: center;
	left: 0;
	right: 0;
	font-weight: bold;
}
a{
	color: white;
	text-decoration: none;
	font-style: oblique;
	font-size: 20px;
}

a:hover{
	color: yellow;
}

.p2{
	color: green;
	font-weight: bold;
	position: absolute;
	top: 1px;
	left: 1%;
	font-size: 20px;
}

.form{
    position: absolute;
    /* border: 2px solid red; */
    display: inline-block;
    left: 22%;
    right: 0;
    top: 40%;
}

input{
	text-align: center;
}

</style>

</head>
<body>
<div class="header">
<?php
$b = $_SESSION['t2'];
echo "<p class='admin'>$b</p>";
echo "<input class='input' type = 'submit' value='Logout'";
?>

</div>
<br><br><br>
<div class="sidebar">
	<div class="side2">
	<a href="sum.php">add two Numbers</a><br><br>
	<a href="">Factorial Of a Number</a><br><br>
	<a href="">Prime Numbers</a><br><br>
	</div>
</div>


<div class="container">

    <center>
    	<h2>Add two Numbers</h2>
    <form action="sum.php" method="post" class="form" name="f1">
        <input class="input1" type="text" name="t1" placeholder="First Number">
        <input class="input1" type="text" name="t2" placeholder="Second Number"><br><br>
        <input type="submit"  name="btnSum"><br><br>
        <input class="input1" type="text" name="answer" id="answer" placeholder="Answer">
    </form>
    </center>

</div>

<?php
if (isset($_POST['btnSum'])) {
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$answer = $_POST['answer'];
$answer = $t1 + $t2;


}
?>

<script type="text/javascript">
var xx;
f1.answer.value=<?php echo $answer;?>	
</script>

</body>
</html>
<?php
}
else
{
header("location: login.php");
}
?>
