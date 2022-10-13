<!DOCTYPE html>
<html>

<head>
	<title>Ganti Kategori</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "tugaskelompokwebprog");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$kode_buku = $_REQUEST['kode_buku'];
		$kategori_buku = $_REQUEST['kategori_buku'];
		
		
		
		$sql = "UPDATE buku SET kategori ='$kategori_buku' WHERE kode_buku like '$kode_buku'";
		
		if(mysqli_query($conn, $sql)){
			echo "Ruang Kelas Berhasil Diganti";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
    <form action="index.php">
         <button type="submit">Isi Data Buku</button>
    </form>
        <br> <br>
		<form action="selectform.php">
         <button type="submit">Lihat  Buku</button>
    </form>
	<br> <br>
    <form action="deleteform.php">
         <button type="submit">Delete Data Buku</button>
    </form>
        <br> <br>
    <form action="gantithnform.php">
         <button type="submit">Ganti Tahun Terbit</button>
    </form>
    <form action="gantiktform.php">
         <button type="submit">Ganti Kategori</button>
    </form>
    </form>
	</center>
</body>

</html>
