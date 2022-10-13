<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div style="width:70%;margin: 20px 15%;">
        <h1 class="text-center" style="font-size: 26px;">Table Daftar Mata Kuliah</h1>
        <a href='./index.php'>Insert Matkul Here</a>
        <table class="table table-dark" style="margin-top: 3%;">
            <thead>
                <tr>
                    <th scope="col">Kode Matkul</th>
                    <th scope="col">Nama Matkul</th>
                    <th scope="col">Jam Matkul</th>
                    <th scope="col">Ruang Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM mata_kuliah";
                $result = mysqli_query($conn, $sql);

                // var_dump(mysqli_num_rows($result));
                if (mysqli_num_rows($result) > 0) {
                    var_dump(mysqli_num_rows($result) > 0);
                    while ($row = mysqli_fetch_array($result)) {
                        // echo "test";
                        echo "<tr>";
                        echo "<th scope='col'>{$row['kode_matkul']}</th>";   
                        echo "<th scope='col'>{$row['nama_matkul']}</th>";
                        echo "<th scope='col'>{$row['jam_matkul']}</th>";
                        echo "<th scope='col'>{$row['ruang_kelas']}</th>";
                        echo "<td scope='col'><a href='edit.php?kode_matkul=$row[kode_matkul]'>Edit</a> | <a href='delete.php?kode_matkul=$row[kode_matkul]'>Delete</a></th>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='5'>No Matkul data inputted, Please Click <a href='./index.php'>Here</a> to Input Matkul Data</td>";
                    echo "</tr>";
                }



                // echo "<a href="./insert.php?nodata=">Insert</a>";
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>