<html>
<head>
<title>Data Barang</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mysidiagame");
	
	print("<h2>Data Order Barang</h2><br>");
	print("<table width='100%'>");
	print("<tr bgcolor='black'>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>No Order</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Nama Pemesan</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Alamat</th>");
        print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>No hp</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Email</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Bukti Bayar</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Status Kirim</th>");
        print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Tanggal Bayar</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Tanggal Kirim</th>");
	print("</tr>");
	
	$no=1;
	$sql = 'SELECT * FROM order';
	$kueri = mysql_query($sql);
	while ($baris = mysql_fetch_array($kueri)){
		print("<tr bgcolor='#000'>");

		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[no_order]</td>");
		print("<td><font color=#666 face=tahoma size=2 /font>$baris[nama_pemesan]</td>");
                print("<td><font color=#666 face=tahoma size=2 /font>$baris[alamat]</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[no_hp],00</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[email]</td>");
                print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[bukti_bayar],00</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[status_kirim]</td>");
                    print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[tgl_order],00</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[tgl_kirim]</td>");
		print("</tr>");
		$no=$no+1;
	} 
	print("</table>");
        
        
        
        	print("<h2>Data Barang</h2><br>");
	print("<table width='100%'>");
	print("<tr bgcolor='black'>");
        	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>No Order</th>");

	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Kode Barang</th>");


	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Harga Barang</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Jumlah Barang</th>");

	print("</tr>");
	
	$no=1;
	$sql = 'SELECT * FROM barang_order';
	$kueri = mysql_query($sql);
	while ($baris = mysql_fetch_array($kueri)){
		print("<tr bgcolor='#000'>");
			print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[no_order]</td>");
			print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[no_order]</td>");		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[kode_barang]</td>");

		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[harga_barang],00</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[jumlah_barang]</td>");
	
		print("</tr>");
		$no=$no+1;
	} 
	print("</table>");
?>
