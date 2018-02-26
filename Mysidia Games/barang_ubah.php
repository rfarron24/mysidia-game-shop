<html>
<head>
<title>MYSIDIA VIDEO GAME ONLINE STORE</title>

</head>
<body>

<table border="0" cellspacing="0" cellpadding="0" align="center">
  
    <td valign="top"><div id="contenttext"> <span class="title_blue">Ubah Data Barang</span><br />
          
          <br /><br />
        <p class="body_text" align="justify">
          <?
	  include ("dbconn.php");
$kode_barang=$_GET['kode_barang'];

$query = "select * from data_barang where kode_barang = '$kode_barang'";

$update = mysqli_query($link, $query);
if ($update) {
	list($kode_barang, $nama_barang, $platform, $harga_barang, $jumlah_barang) =
		mysqli_fetch_array($update); 

	
?>
        <form action="update.php?update=$update[kode_barang]" method="POST">
          <table width="500" height="236" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="133">Kode Barang </td>
              <td width="367"><input name="kode_barang" type="text" class="inputbok" id="kode_barang" size="50"  value="<?php echo $kode_barang; ?>" readonly="" /></td>
            
			</tr>
            <tr>
              <td>Nama Barang</td>
              <td><input name="nama_barang" type="text" class="inputbok" id="nama_barang" size="50"  value="<?php echo $nama_barang; ?>" /></td>
            </tr>
             <tr>
              <td>Platform Game</td>
              <td><input name="platform" type="text" class="inputbok" id="platform" size="50"  value="<?php echo $platform; ?>" /></td>
            </tr>
            <tr>
              <td>Harga Barang</td>
              <td><input name="harga_barang" type="text" class="inputbok" id="harga_barang" size="50"  value="<?php echo $harga_barang; ?>"  /></td>
            </tr>
            <tr>
              <td>Jumlah Barang</td>
              <td><input name="jumlah_barang" type="text" class="inputbok" id="jumlah_barang" size="50"  value="<?php echo $jumlah_barang; ?>" /></td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td><input name="update" type="submit" id="update" value="Update" class="inputbok"/>
              <input name="batal" type="button" id="batal" value="Batal" class="inputbok" onclick="javascript:window.location"='barang.php?kode_barang="<?=$kode_barang;?>"'></td>
            </tr>
          </table>
        </form></p>
    </div></td>
  </tr>
  
</table>
<?php

	mysqli_free_result($update);
}	

?>

</body>
</html>