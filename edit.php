 <?php
include 'koneksi.php';

//Ambil ID dari URL 
$id = $_GET['id'];
 
// Query untuk mengambil data berdasarkan ID
$query = "SELECT * FROM transaksi WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die ("Query  Error : " . mysqli_error($conn));
}
$data = mysqli_fetch_assoc($result);
 
if (!$data) {
    die("Data tidak ditemukan!");
}

//sertakan file tampilan from
include 'lihat_data.php';
?>