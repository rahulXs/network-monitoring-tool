<!DOCTYPE html>
<html>
  <head>
	<title>NMT</title>
	<style>
	.card{
		padding: 3%;
		width: 220px;
		height: 100px;
		margin: 50px;

	}
	</style>
</head>

<body style="background-color:#232830">
<center><h2 style="color:white;">Network Monitoring Tool</h2></center>
<div><center>

<form class="card" method="post" style="background-color:#2C323C">
<label style="color:white;">Username</label>
<input  name="username" required type="text"/><br>
<label style="color:white;">Password</label>
<input name="password" required type="password"/><br><br>
<button type="submit">Submit</button>
</form></center>
</div>
</body>
</html>


<?php
$link=mysqli_connect("localhost","root","streakmysql","NMT");
if(isset($_POST['username']) && isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
if (!empty($username) && !empty($password))
{
$query= "SELECT * FROM NETWORK WHERE username='$username' AND
password='$password' ";
$query_run=mysqli_query($link,$query);
if (mysqli_num_rows($query_run)>=1)
{
	shell_exec('./script.sh');
  echo "<script type = \"text/javascript\">
                  alert(\"Login Successful...\");
                  window.location = (\"home.php\")
                  </script>";
}
else
{
echo "<script type = \"text/javascript\">
                  alert(\"Login failed...\");
                  window.location = (\"index.php\")
                  </script>";
}}}
?>

