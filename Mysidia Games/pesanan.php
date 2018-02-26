<html>
<head>
<title>MYSIDIA VIDEO GAME ONLINE STORE</title>
<script language="JavaScript">
function validasi(){
  var myform = document.form1;
   if (myform['nama_barang'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['no_order'].focus();
	return false;
         }
  if (myform['kode_barang'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['kode_barang'].focus();
	return false;
  }
 

  if (myform['harga_barang'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['harga_barang'].focus();
	return false;
  }
  if (myform['jumlah_barang'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['jumlah_barang'].focus();
	return false;
    }
  
  }
return true;
}
function simpan_barang_kode_barang (kejadian)
{
kejadian = (kejadian) ? kejadian : window.event;
var charCode = (kejadian.which) ? kejadian.which : kejadian.keyCode;
	if (charCode ==13)
		{
		document.form1.kode_barang.focus();
		return false;
		}
	return true;
}
function simpan_barang_nama_barang (kejadian)
{
kejadian = (kejadian) ? kejadian : window.event;
var charCode = (kejadian.which) ? kejadian.which : kejadian.keyCode;
	if (charCode ==13)
		{
		document.form1.no_order.focus();
		return false;
		}
	return true;
}
function simpan_barang_harga_barang (kejadian)
{
kejadian = (kejadian) ? kejadian : window.event;
var charCode = (kejadian.which) ? kejadian.which : kejadian.keyCode;
	if (charCode ==13)
		{
		document.form1.harga_barang.focus();
		return false;
		}
	return true;
}
function simpan_barang_jumlah_barang (kejadian)
{
kejadian = (kejadian) ? kejadian : window.event;
var charCode = (kejadian.which) ? kejadian.which : kejadian.keyCode;
	if (charCode ==13)
		{
		document.form1.jumlah_barang.focus();
		return false;
		}
	return true;
}

	
</script>
</head>
<body>
<font color=#336666 face=blackoronalp size=6 /font>SILAHKAN INPUT DATA BARANG
<BR><BR>

	<table>
            <tr>
		<td><font color=#666 face=tahoma size=4 /font>Nao Order</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="40" name="no_order" class="inputbok" id="no_order" onKeyPress="return simpan_barang_nama_barang(event)"/></td>
	</tr>
	<tr>
		<td><font color=#666 face=tahoma size=4 /font>Kode Barang</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="kode_barang" class="inputbok" id="kode_barang" onKeyPress="return simpan_barang_kode_barang(event)"/></td>
		
		</tr>
		
	
	<tr>
		
		<td><font color=#666 face=tahoma size=4 /font>Harga Barang (Rp)</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="harga_barang" class="inputbok" id="harga_barang" onKeyPress="return simpan_barang_harga_barang(event)"/></td>
	</tr>
	<tr>
		<td><font color=#666 face=tahoma size=4 /font>Jumlah Barang</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="jumlah_barang" class="inputbok" id="jumlah_barang" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
	
	<tr>
		
					<td><br><br>
					<input name="simpan" type="submit" id="simpan" value="Simpan" class="inputbok" />
					<input name="batal" type="reset" id="batal" value="Batal" class="inputbok" /> </td>
	</tr>
	</table>
</form>

<?
if(isset($_POST['simpan'])){
    	$no_order		=$_POST['no_order'];
	$kode_barang		=$_POST['kode_barang'];


	$harga_barang		=$_POST['harga_barang'];
	$jumlah_barang		=$_POST['jumlah_barang'];
	
$simpan_barang=mysql_query("select no_order from barang_order where no_order='$no_order'");
$hasil=mysql_fetch_array($simpan_barang);
if(!empty($hasil)){
echo "<div class='pesan' style='width:506px;padding:10px;'>Data data_barang dengan Kode Barang $no_order sudah ada dalam database.</div><br>";
}
$query=mysql_query("insert into barang_order values('$no_order','$kode_barang','$harga_barang','$jumlah_barang')") or die("<div class='pesan' style='width:506px;padding:10px;'>Data barang dengan Kode Barang $no_order sudah ada dalam database.</div><br>");
}
?>

</body>
</html>