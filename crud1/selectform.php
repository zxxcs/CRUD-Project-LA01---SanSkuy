<!DOCTYPE html>
<html>

<head>
	<title>Lihat Data Buku</title>
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
                $result = mysqli_query($conn, $sql);

                 
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
                }



                
                ?>
            </tbody>
        </table>
		
	   <br> <br>
	   <form action="index.php">
         <button type="submit">Isi Data Buku</button>
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
	</center>
</body>

</html>
