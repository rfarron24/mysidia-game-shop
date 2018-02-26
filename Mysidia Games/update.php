
<?
  include "koneksi.php";
  
if(isset($_GET['update'])){
  	$kode_barang=$_POST['kode_barang'];
	$nama_barang=$_POST['nama_barang'];
        $platform=$_POST['platform'];
	$harga_barang=$_POST['harga_barang'];
	$jumlah_barang=$_POST['jumlah_barang'];
include "koneksi.php";
	$update=mysql_query("UPDATE data_barang SET nama_barang = '$nama_barang',platform = '$platform', harga_barang = '$harga_barang', jumlah_barang = '$jumlah_barang' WHERE kode_barang = '$kode_barang'");
if ($update){
echo "update berhasil";
	}
	else 
	{
	echo "update gagal";
	}
	}
?>