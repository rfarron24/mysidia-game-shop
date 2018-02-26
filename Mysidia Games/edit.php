<?php
 
  
    $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
mysql_select_db("mysidiagame") or die ("Gagal membuka database.");
$edit=mysql_query("SELECT * FROM data_barang WHERE kode_barang='$_GET[kode_barang]'");
$r_edit=mysql_fetch_array($edit);
   
$kode_barang = $_GET['kode_barang'];
$query = "select * from data_barang where kode_barang='$kode_barang'";
$result =  mysql_query($query, $sambung) or die("gagal melakukan query");
     $buff = mysql_fetch_array($result);
                 mysql_close($sambung);
?>
<html>
<head><title>Edit Data</title></head>
<body>
<form name="form1" method="post" action="updatee.php">
<table>
<tr>
<td>Kode Barang</td><td><input type="text" name="kode_barang" value="<?php echo $buff['kode_barang']; ?>"></td></tr>
<tr><td>Nama Barang</td><td><input type="text" name="nama_barang" value="<?php echo $buff['nama_barang']; ?>"></td></tr>
<tr><td>Jenis Platform</td><td><input type="text" name="platform" value="<?php echo $buff['platform']; ?>" size="50"></td></tr>
<tr><td>Harga</td><td><input type="text" name="harga_barang" value="<?php echo $buff['harga_barang']; ?>"></td></tr>
<tr><td>Jumlah Stok</td><td><input type="text" name="jumlah_barang" value="<?php echo $buff['jumlah_barang']; ?>"></td></tr>
<tr>
<input value="Simpan" type="submit" name="submit"/>
<input type="button" value="Kembali" onClick="self.history.back()"></td></tr>
</table>
</form>
</body>
</html>