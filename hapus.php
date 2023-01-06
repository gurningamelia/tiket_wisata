<?php
//koneksi database include 'koneksi.php'; 
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$nama = $_GET['nama'];

//menghapus data dari database
$hapus = mysqli_query($db, "delete from pemesanan where nama='$nama'");

if ($hapus) {
echo "<script> alert ('Data Berhasil Dihapus')</script>"; header("refresh:0;admin.php");
} else {
echo "<script> alert ('Data Tidak Berhasil Dihapus')</script>"; header("refresh:0;admin.php");
}

?>
