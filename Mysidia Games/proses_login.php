<?php
include "koneksi.php";
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$user  = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
$match = mysql_num_rows($user);
 
if ($match==1)
include ("simpan_barang.php");

else 
    include ("index.php"); 

?>