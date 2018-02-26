<?php
   $host="localhost";
   $user="root";
   $pass="";
   $db="mysidiagame";
   $sambung=mysql_connect($host,$user,$pass);
   mysql_select_db($db,$sambung);
   
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
   $platform = $_POST['platform'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
                 $query = mysql_query("update mhs set nama_barang='$nama_barang', platform='$platform', harga_barang='$harga_barang', jumlah_barang='$jumlah_barang' where kode_barang='$kode_barang'");
echo "Data Telah diupdate<br>
<a href=\"index.php\">Kembali</a>";
?>