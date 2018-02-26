<html>
<head>
<title>MYSIDIA VIDEO GAME ONLINE STORE/title>
<link href="framelayout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	include ("dbconn.php");
	
	$kode_barang = $_GET['kode'];	
?>
<h2>Detail Barang</h2>

<?php

$query = "select kode_barang, nama_barang, harga_barang, jumlah_barang
	      from data_barang
	      where kode_barang = '$kode_barang'";

$result = mysqli_query($link, $query);
if ($result) {
	list($kode_barang, $nama_barang, $harga_barang, $jumlah_barang) =
		mysqli_fetch_array($result);
	?>
		<fieldset style="width:500px;">
<legend style="color:orange">Data Detail data barang </legend>
<table class="buku">
		<tr>
			<td width="200" align="left">kode Barang</td>
			<td width="490" align="left"><strong><?php echo $kode_barang; ?></strong></td>
		</tr>
		<tr>
			<td width="200" align="left">Nama Barang</td>
			<td width="490" align="left"><strong><?php echo $nama_barang; ?></strong></td>
		</tr>
		<tr>
                    	<td width="200" align="left">Platform Game</td>
			<td width="490" align="left"><strong><?php echo platform; ?></strong></td>
		</tr>
		<tr>
			<td width="200" align="left">Harga Barang</td>
			<td width="490" align="left"><strong><?php echo $harga_barang; ?></strong></td>
		</tr>
		<tr>
			<td width="200" align="left">Jumlah Barang</td>
			<td width="490" align="left"><strong><?php echo $jumlah_barang; ?></strong></td>
		</tr>

  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><input name="ubah" type="button" id="ubah" value="Ubah" class="inputbok" onclick="javascript:window.location='barang_ubah.php?kode_barang=<?php echo $kode_barang; ?>'" />
      <a href="barang_hapus.php?kode_barang=<?php echo $kode_barang; ?>" class="boxy" title="Hapus Data Darang"><input name="hapus" type="button" value="Hapus" class="inputbok" /></a>
      <input name="kembali" type="button" id="kembali" value="Kembali" class="inputbok" onclick="javascript:window.location='barang.php?cmd=all'" />      </td>
    </tr>
</table>
</fieldset>

    </div></td>
  </tr>
  
</table>
		
	<?php
	mysqli_free_result($result);
}
?>

</body>
</html>