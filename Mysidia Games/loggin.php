<html>
<head><title>MYSIDIAN GAME NEST</title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
	mysql_select_db("mysidiagame");
 
$username = md5($_POST['username']);
	$password = md5($_POST['password']);
 
$user=mysql_query("SELECT * FROM user WHERE username='$username'");
$match = mysql_num_rows($user);
 
if ($match[1]==""){
    session_start();
$_session['username']=$username;
header("location:user.php");
}




?>
</body>
</html>



