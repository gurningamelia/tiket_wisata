<?php
include 'Koneksi.php';

$nama = $_POST['nama'];
$no_identitas = $_POST['no_identitas'];
$no_hp = $_POST['no_hp'];
$tempat_wisata = $_POST['tempat_wisata'];
$tgl_kunjungan = $_POST['tgl_kunjungan'];
$jmlh_pengunjung = $_POST['jmlh_pengunjung'];
$pengunjung_anak = $_POST['pengunjung_anak'];


mysqli_query($db, "update pemesanan set nama='$nama', no_identitas='$no_identitas', no_hp='$no_hp', tempat_wisata='$tempat_wisata', tgl_kunjungan='$tgl_kunjungan', jmlh_pengunjung='$jmlh_pengunjung', pengunjung_anak='$pengunjung_anak'");

header("location:admin.php");
?>
