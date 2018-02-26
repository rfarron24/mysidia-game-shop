<?
include "dbconn.php";
$kode=$_GET['kode_barang'];
$update=mysql_query("select *from data_barang where kode_barang=$kode_barang");
$baris = mysql_fetch_array($update)

?>

<br>
<table border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
  <tr>
	<td width="13" align="right"><img src="./img/kiri.jpg"></td>
	<td width="504" bgcolor="#5686c6" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF">UPDATE DATA BARANG</font></strong></div></td>
	<td width="13"><img src="./img/kanan.jpg"></td>
  </tr>
  <tr>
	<td background="./img/b-kiri.jpg">&nbsp;</td>
	<td width="504" height="200" valign="top">
	
		<table width="500" cellspacing="0" cellpadding="0" border="0" align="center">
		<br>
		<tr>
		<form action="update.php" method="post">
			
			<td width="39%" height="36"><font face="verdana" size="2">Kode Barang </font></td>
		    <td width="61%"><font face="Times New Roman" size="2">
	      <input type="text"name="kodebrg" cols="30" rows="1" value= <? echo $baris['kode_barang']?>></textarea></font></td>
		</tr>
		<tr>
			
			<td width="39%" height="36"><font face="verdana" size="2">Nama Barang </font></td>
		    <td width="61%"><font face="Times New Roman" size="2">
	      <input type="text"name="namabrg" cols="30" rows="1" value= <? echo $baris['nama_barang']?>></textarea></font></td>
		</tr>
                
                <tr>
			
			<td width="39%" height="36"><font face="verdana" size="2">Platform Game </font></td>
		    <td width="61%"><font face="Times New Roman" size="2">
	      <input type="text"name="platform" cols="30" rows="1" value= <? echo $baris['platform']?>></textarea></font></td>
		</tr>
		
		<tr>
			<td width="39%" height="36"><font face="verdana" size="2">Harga Barang </font></td>
		    <td width="61%"><font face="Times New Roman" size="2">
	      <input type="text"name="hargabrg" cols="30" rows="1" value= <? echo $baris['harga_barang']?>></textarea></font></td>
		</tr>
		
		<tr>
			<td width="39%" height="36"><font face="verdana" size="2">Stok Barang </font></td>
		    <td width="61%"><font face="Times New Roman" size="2">
	      <input type="text"name="stok" cols="30" rows="1" value= <? echo $baris['jumlah_barang']?>></textarea></font></td>
		</tr>
		
		<tr>
			<td width="39%"><p>&nbsp;
			  </p>
		  <p>&nbsp;</p></td>
		  <td width="61%"><input type="submit" value="Simpan">&nbsp;
		  <input type="button" name="batal" value="Batal" onClick="location.replace('index.php?page=2');" /></td>
		</tr>
		
		</table>
	</form>
	</td>
	<td background="./img/b-kanan.jpg">&nbsp;</td>
  </tr>
  <tr>
	<td align="right"><img src="./img/kib.jpg"></td>
	<td bgcolor="#5686c6" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
	<td><img src="./img/kab.jpg"></td>
  </tr>
</table>