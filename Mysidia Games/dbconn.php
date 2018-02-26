<?php
$host 	    = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "mysidiagame";

$link = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

mysql_connect($host, $dbusername, $dbpassword) or die("Koneksi gagal");
mysql_select_db($dbname) or die("Database tidak bisa dibuka");

?>