<html>
<head>
<title>MYSIDIA VIDEO GAME ONLINE STORE</title>
</head>
<body>
<?php
include "koneksi.php";
	$kode_barang=$_POST['kode_barang'];
	$nama_barang=$_POST['nama_barang'];
        $platform=$_POST['platform'];
	$harga_barang=$_POST['harga_barang'];
	$jumlah_barang=$_POST['jumlah_barang'];
	
	
	mysql_query("insert into data_barang(kode_barang,nama_barang,platform,harga_barang,jumlah_barang) values('$kode_barang','$nama_barang','$platform','$harga_barang','$jumlah_barang')");
	 include ("barang.php");
?>
<fieldset style="width:500px;"><legend style="color:red">Data Barang Berhasil Disimpan</legend>
<table width="500" height="156" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="133">Kode Barang</td>
    <td width="12">:</td>
    <td width="355"><? echo $kode_barang; ?></td>
  </tr>
  <tr>
    <td width="133">Nama Barang</td>
    <td width="12">:</td>
    <td width="355"><? echo $nama_barang; ?></td>
  </tr>
  
   <tr>
    <td width="133">Platform Game</td>
    <td width="12">:</td>
    <td width="355"><? echo $platform; ?></td>
  </tr>
  
  <tr>
    <td width="133">Harga Barang</td>
    <td width="12">:</td>
    <td width="355"><? echo $harga_barang; ?></td>
  </tr>
  <tr>
    <td width="133">Jumlah Barang</td>
    <td width="12">:</td>
    <td width="355"><? echo $jumlah_barang; ?></td>
  </tr>
  </table>
</fieldset>

</body>
</html>