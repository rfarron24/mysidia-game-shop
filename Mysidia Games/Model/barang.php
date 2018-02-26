<html>
<head>
<title>Data Barang</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mysidiagame");
	
	print("<h2>Data Barang</h2><br>");
	print("<table width='100%'>");
	print("<tr bgcolor='gray'>");
	print("<th align='center'>No</th>");
	print("<th align='center'>Kode Barang</th>");
	print("<th align='center'>Nama Barang</th>");
        print("<th align='center'>Platform Game</th>");
	print("<th align='center'>Harga Barang</th>");
	print("<th align='center'>Jumlah Barang</th>");
	print("<th align='center'>Detail</th>");
	print("</tr>");
	
	$no=1;
	$sql = 'SELECT * FROM data_barang';
	$kueri = mysql_query($sql);
	while ($baris = mysql_fetch_array($kueri)){
		print("<tr bgcolor='#cccc999'>");
		print("<td aling='center'>$no</td>");
		print("<td align='center'>$baris[kode_barang]</td>");
		print("<td>$baris[nama_barang]</td>");
                print("<td>$baris[platform]</td>");
		print("<td align='center'>$baris[harga_barang],00</td>");
		print("<td align='center'>$baris[jumlah_barang]</td>");
		print("<td><a href='barang_lihat.php?kode=$baris[kode_barang]'>Detail</a></td>");
		print("</tr>");
		$no=$no+1;
	} 
	print("</table>");
?>
