<html>
	<head>
		<title>My Guest Book</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">BUKU TAMU </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>No WhatsApp</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>E-Mail</td>
						<td><input name="email" type="text" id="email"></td> </tr>
					</tr>

					<tr>
						<td>Jenis potongan</td>
						<td>
							<select name="status" id="status">
								<option>Buzz cut</option>
								<option>Crew Cut</option>
								<option>Crop cut</option>
								<option>Chin Length</option>
								<option>Lvy League</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Tanggal dan jam Reservasi</td>
						
						<td><input name="tanggal" type="text" id="tanggal"></td> </tr>
					
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">Buku Tamu
		</a></strong></div>
	</body>
</html>
