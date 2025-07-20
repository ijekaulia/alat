<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>data ikan</title>
</head>
<body>
    <?php
$koneksi = new mysqli ("localhost", "root", "","alat");
$query = "SELECT * FROM tabel_alat";
$result = $koneksi -> query($query);

    if ($result -> num_rows >0){
        echo "<table border='1'>
            <tr>
                <th>nama</th>
                <th>jenis</th>
                <th>kondisi</th>
            </tr>";
        while($row = $result -> fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['jenis'] . "</td>
                    <td>" . $row['kondisi'] . "</td>
                </tr>";
        }
        echo "</table>";
    }else{
        echo "Belum ada data alat";
    }
$koneksi -> close(); 
    ?>
</body>
</html>