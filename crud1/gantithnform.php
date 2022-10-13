<!DOCTYPE html>
<html>

<head>
	<title>Ganti Tahun Terbit</title>
</head>

<body>
	<center>
	<table  style="width: 50%;margin-top: 3%; border: 1px solid black; " >
            <thead>
                <tr>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Kategori Buku</th>
                    
                </tr>
            </thead>
            <tbody>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    if (mysqli_num_rows($result) > 0) {
		var_dump(mysqli_num_rows($result) > 0);
		while ($row = mysqli_fetch_array($result)) {
			 
			echo "<tr>";
			echo "<th scope='col'>{$row['kode_buku']}</th>";   
			echo "<th scope='col'>{$row['judul_buku']}</th>";
			echo "<th scope='col'>{$row['tahun_terbit']}</th>";
			echo "<th scope='col'>{$row['kategori']}</th>";
			echo "</tr>";
		}
	} else {
		echo "<tr>";
		echo "<td colspan='5'>Tidak ada data buku</td>";
		echo "</tr>";
	} }

		
		mysqli_close($conn);
		?>
	</tbody>
        </table>
        
	<h3> 
        Silahkan input kode buku untuk di ganti tahun terbit-nya
   </h3>
   <form action="gantithn.php" method="post">

  			<p>
			<label for="kodeBuku">Kode Buku:</label>
			<input type="text" name="kode_buku" id="kodeBuku" required>
			</p>
			<p>
			<label for="tahunTerbit">Tahun Terbit:</label>
			<input type="text" name="tahun_terbit" id="tahunTerbit" required>
			</p>
            
         <button type="submit">Ganti Tahun Terbit Buku</button>
         
    </form>

	</center>
</body>

</html>
