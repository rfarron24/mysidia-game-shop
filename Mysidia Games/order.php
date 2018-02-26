<html>
<head>
<title>MYSIDIA VIDEO GAME ONLINE STORE</title>
<script language="JavaScript">
function validasi(){
  var myform = document.form1;
  if (myform['no_order'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['no_order'].focus();
	return false;
  }
  if (myform['nama_pemesan'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['nama_pemesan'].focus();
	return false;
         }
  if (myform['alamat'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['alamat'].focus();
	return false;
  }
  if (myform['no_hp'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['no_hp'].focus();
	return false;
  }
  if (myform['email'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['email'].focus();
	return false;
    }
  if (myform['bukti_bayar'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['bukti_bayar'].focus();
	return false;
    }
    if (myform['status_kirim'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['status_kirim'].focus();
	return false;
    }
    if (myform['tgl_order'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['tgl_order'].focus();
	return false;
    }
    if (myform['tgl_kirim'].value==""){
    alert("Maaf, Data belum lengkap");
	myform['tgl_kirim'].focus();
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
		document.form1.no_order.focus();
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
		document.form1.nama_pemesan.focus();
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
		document.form1.no_hp.focus();
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
		document.form1.bukti_bayar.focus();
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
		<td><font color=#666 face=tahoma size=4 /font>no_order</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="no_order" class="inputbok" id="no_order" onKeyPress="return simpan_barang_kode_barang(event)"/></td>
		
		</tr>
		<tr>
		<td><font color=#666 face=tahoma size=4 /font>nama_pemesan</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="40" name="nama_pemesan" class="inputbok" id="nama_pemesan" onKeyPress="return simpan_barang_nama_barang(event)"/></td>
	</tr>
	<tr>
		<td><font color=#666 face=tahoma size=4 /font>alamat</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><font color=#666 face=tahoma size=3 ><input type="text" size="40"  name="alamat" class="inputbok" id="alamat" onKeyPress="return simpan_barang_nama_barang(event)"/></td>
	</tr>
	<tr>
		
		<td><font color=#666 face=tahoma size=4 /font>no_hp (Rp)</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="no_hp" class="inputbok" id="no_hp" onKeyPress="return simpan_barang_harga_barang(event)"/></td>
	</tr>
	<tr>
		<td><font color=#666 face=tahoma size=4 /font>email</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="email" class="inputbok" id="email" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
	
	<tr>
		<td><font color=#666 face=tahoma size=4 /font>bukti_bayar</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="bukti_bayar" class="inputbok" id="bukti_bayar" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
        <tr>
		<td><font color=#666 face=tahoma size=4 /font>status_kirim</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="status_kirim" class="inputbok" id="status_kirim" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
        <tr>
		<td><font color=#666 face=tahoma size=4 /font>tgl_order</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="tgl_order" class="inputbok" id="tgl_order" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
        <tr>
		<td><font color=#666 face=tahoma size=4 /font>tgl_kirim</td>
		<td><font color=#666 face=tahoma size=4 /font>:</td>
		<td><input type="text" size="25" name="tgl_kirim" class="inputbok" id="tgl_kirim" onKeyPress="return simpan_barang_jumlah_barang(event)"/></td>
		
	</tr>
		
					<td><br><br>
					<input name="simpan" type="submit" id="simpan" value="Simpan" class="inputbok" />
					<input name="batal" type="reset" id="batal" value="Batal" class="inputbok" /> </td>
	</tr>
	</table>
</form>

<?
if(isset($_POST['simpan'])){
	$no_order=$_POST['no_order'];
	$nama_pemesan=$_POST['nama_pemesan'];
        $alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];
	$email=$_POST['email'];
	$bukti_bayar=$_POST['bukti_bayar'];
        $status_kirim=$_POST['status_kirim'];
	$tgl_order=$_POST['tgl_order'];
	$tgl_kirim=$_POST['tgl_kirim'];
	
$simpan_barang=mysql_query("select no_order from order where no_order='$no_order'");
$hasil=mysql_fetch_array($simpan_barang);
if(!empty($hasil)){
echo "<div class='pesan' style='width:506px;padding:10px;'>Data no_order dengan NO ORDER $no_order sudah ada dalam database.</div><br>";
}
$query=mysql_query("insert into order values('$no_order','$nama_pemesan','$alamat','$no_hp','$email','$bukti_bayar','$status_kirim','$tgl_order','$tgl_kirim')") or die("<div class='pesan' style='width:506px;padding:10px;'>Data pelanggan dengan NO ORDER $no_order sudah ada dalam database.</div><br>");
}
?>

</body>
</html>