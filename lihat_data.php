<?php

//menghubungkan ke file koneksi.php
include 'koneksi.php';
//Query untuk mengambil semuah data dari tabel teransaksi
$query = "SELECT id, nama, email, nim, password, data_barang FROM transaksi";
$result = mysqli_query($conn, $query);

if (!$result){
    die("Query Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd; 
            text-align: left;
        }

        th, td{
            padding: 8px
        }

        th {
             background-color: #f2f2f2;
        }

        tr:nth-child(even){
            background-color: #f9f9f9;
        }
        </style>
    </head>
    <body>

    <h2>Data Transaksi</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>email</th>
            <th>NIM</th>
            <th>Password</th>
            <th>Data Barang</TH>
            <th>AKSI</th>
    </tr>

    <?php
    //mengambil data per baris
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']." </td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['nim']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['data_barang']."</td>";
        echo "<td><a href='edit.php?id=".$row['id']."'>Edit </a> | Hapus</td>";
        echo"</tr>";
    }
    ?>
    </table>

    <?php 
    //Menutup Koneksi
    mysqli_close($conn);
    ?>

</body>
</html>