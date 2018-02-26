<html>
<head><title>MYSIDIA VIDEO GAME ONLINE STORE-HOME</title>
</head>
<link href="layout.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="wrap">
	<div id="header">
	<table>
		
			<td><image src="images/hd.jpg"></td>
			
		
	</table>
	</div>
	<ul class="menu" id="menu">
	<li><a href="welcome.php" target="frmMain" class="menulink">Homepage</a></li>
	<li><a href="order.php" target="frmMain" class="menulink">STEP 1: Data Pembeli</a></li>
	<li><a href="pesanan.php" target="frmMain" class="menulink">STEP 2: Data Barang</a></li>
	<li><a href="cek_info.php" target="frmMain" class="menulink">Cek Informasi</a></li>

	</ul>
	<script type="text/javascript">
		var menu=new menu.dd("menu");
		menu.init("menu","menuhover");
	</script>
	
	
	
	
	
	<table>
	<tr>
	<td><? include "kiri2.php"; ?></td>
	
	<td><div id="main">
	<iframe width="700px" height="600px" frameborder="0" name="frmMain" Scrolling="auto" src="welcome.php"></iframe>
	
	</div></td>
	
	</tr>
	</table>
        <div id="nav">
	<center>
	<form action="cari.php" method="post" target="frmMain">
		<strong>Pencarian Barang:</strong>
		<select name="comboCari">
			<option value="0">B</option>
			<option value="1">B</option>
			<option value="2">B</option>
		</select>
		<input type="text" name="txtCari" size="45" />
		<input type="submit" name="btnCari" value="Cari">
	</form>
	</center>
	</div>
	<div id="footer">
            Copyright &copy; 2013 - MYSIDIAN GAME NEST
	</div>
</div>
</body>
</html>