<!DOCTYPE html>
<html>

<head>
	<title>Input Buku</title>
</head>

<body>
	<center>
		
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$kode_buku = $_REQUEST['kode_buku'];
		$judul_buku = $_REQUEST['judul_buku'];
		$tahun_terbit = $_REQUEST['tahun_terbit'];
		$kategori_buku = $_REQUEST['kategori_buku'];
		
		
		
		$sql = "INSERT INTO buku VALUES ('$kode_buku',
			'$judul_buku','$tahun_terbit','$kategori_buku')";
		
		if(mysqli_query($conn, $sql)){
			echo "Data Buku Berhasil Di-input";

			echo nl2br("\n$kode_buku\n $judul_buku\n "
				. "$tahun_terbit\n $kategori_buku\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
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
