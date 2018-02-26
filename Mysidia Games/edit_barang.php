	<?
  include "koneksi.php";
	if(isset($_GET['kode'])){
		$kode = $_GET['kode'];
	} else {
    echo "<script>alert('Kode Anggota Belum Dipilih');document.location='../../media.php?module=agt'</script>";
	}
   
   //tampung masing-masing data ke dalam variabel
   $kode = $data['kode_barang'];
   $nama = $data['nama_barang'];
   $platform = $data['platform'];
   $harga = $data['harga'];
   $jumlah = $data['jumlah_stok'];
   $foto = $data['photo'];
?>
</head>
<body>
<fieldset>
<legend> Form Edit Data Barang </legend>
<form action="" method="post" name="frmanggota" onsubmit="return cekform()" enctype="multipart/form-data" >
<table>	
			<tr>
				<td width="163">Kode Barang </td>
				<td width="321"><input name="kode" type="text" id="kode" size="10" value="<? echo "$kode"; ?>" readonly /></td>
				<td width="163" rowspan="7" align="center" valign="top"><img src="<?php echo  $data['photo']; ?>" alt="<?php echo  $dataku->nama?>" width="100" border="1"/></td>
			</tr>
			<tr>
				<td>Nama Barang </td>
				<td><input name="nama" type="text" id="nama" value="<? echo "$nama"; ?>" /></td>
			</tr>
			<tr>
				<td>Harga Barang </td>
				<td><input name="harga" type="text" id="harga" value="<? echo "$harga"; ?>" /></td>
			</tr>
			<tr>
				<td>Persediaan</td>
				<td><input name="stok" type="text" id="stok" maxlength="5" size="5" value="<? echo "$jumlah"; ?>" /></td>
			</tr>
			<tr>
              <td>Photo</td>
              <td><input type="file" name="photo" id="photo"></td>
            </tr>
			<tr>
			<td></td>
			<td>Pilih photo jika ingin diganti</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input name="edit" type="submit" id="edit" value="Edit" /><input name="fulang" type="button" id="fulang" value="Batal" onClick="javascript:history.back()"></td>
			</tr>
		</table>
</form>
</fieldset>
<?
if(isset($_POST['edit'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
   $platform = $_POST['platform'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
	
	if (!empty($_FILES["photo"]["tmp_name"]))
		{
			$namafolder="gambar/"; //tempat menyimpan file
			$jenis_gambar=$_FILES['photo']['type'];
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			{           
				$photo = $namafolder . basename($_FILES['photo']['name']);       
				if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) 
				{
				   die("Gambar gagal dikirim");
				}
				mysql_query("UPDATE barang set photo='$photo' WHERE kode_barang='$kode'");
			} 
			else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
		} //end if cek file upload
		mysql_query("UPDATE barang SET nama_barang='$nama', harga='$harga', jumlah_stok='$stok' WHERE kode_barang='$kode'");
		echo "<script>alert('Data Barang berhasil di masukan ke database'); document.location='media.php?module=barang'</script>";
	}		
?>