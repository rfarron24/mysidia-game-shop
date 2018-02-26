<? 
	include ("dbconn.php");
	
	$kode_barang = $_GET['kode_barang'];	
	
	$hapus=mysql_query("delete from data_barang where kode_barang='$kode_barang'");
	
		
			echo "<script> document.location.href='barang.php'; </script>";
		
		

?>