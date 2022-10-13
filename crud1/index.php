<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input Data Buku Perpustakaan</title>
</head>
<body>
	<center>
		<h1>Input Data Buku</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="kodeBuku">Kode Buku:</label>
			<input type="text" name="kode_buku" id="kodeBuku" required>
			</p>

			
<p>
			<label for="judulBuku">Judul Buku:</label>
			<input type="text" name="judul_buku" id="judulBuku" required>
			</p>

			
<p>
			<label for="tahunTerbit">Tahun Terbit:</label>
			<input type="text" name="tahun_terbit" id="tahunTerbit" required>
			</p>

			
<p>
			<label for="katergoriBuku">Kategori Buku:</label>
			<input type="text" name="kategori_buku" id="katergoriBuku" required>
			</p>


			<input type="submit" value="Isi Data Buku">
            <br> <br>
		</form>
   <form action="selectform.php">
         <button type="submit">Lihat  Buku</button>
    </form>
        <br> <br>
    <form action="deleteform.php">
         <button type="submit">Delete Buku</button>
    </form>
        <br> <br>
    <form action="gantithnform.php">
         <button type="submit">Ganti Tahun Terbit</button>
    </form>
	<br>
    <form action="gantiktform.php">
         <button type="submit">Ganti Kategori</button>
    </form>
	</center>
</body>
</html>
