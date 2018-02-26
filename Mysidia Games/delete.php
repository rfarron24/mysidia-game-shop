<? 
	include "./include/conn.php";
	$kode=$_GET['kode'];
	$hapus=mysql_query("delete from data_barang where kode=$kode");
	
		
			echo "<script> document.location.href='index.php?page=2'; </script>";
		
		

?>