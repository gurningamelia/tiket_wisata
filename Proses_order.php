<?php
// koneksi ke database include 'script/koneksi.php';
include 'Koneksi.php';

$nama = $_POST['nama'];
$no_identitas = $_POST['no_identitas'];
$no_hp = $_POST['no_hp'];
$tempat_wisata = $_POST['tempat_wisata'];
$tgl_kunjungan = $_POST['tgl_kunjungan'];
$jmlh_pengunjung = $_POST['jmlh_pengunjung'];
$pengunjung_anak = $_POST['pengunjung_anak'];

switch ($tempat_wisata) {
    case 1:
        $tempat_wisata = "waykambas";
        $harga = 20000;
        break;
    case 2:
        $tempat_wisata = "pahawang";
        $harga = 30000;
        break;
    case 3:
        $tempat_wisata = "teluk";
        $harga = 50000;
        break;
    default:
        echo "Kosong";
        break;
}

$diskon = $pengunjung_anak * ($harga * 0.1);
$total = ($jmlh_pengunjung * $harga) - $diskon;

$anak = $harga * $pengunjung_anak;
$diskon = 0.1 * $anak;
$totalanak = $anak - $diskon;
$totalumum = $harga * $jmlh_pengunjung;
$totals = $totalanak + $totalumum;

$pesan = mysqli_query($db, "insert into pemesanan values ('$nama','$no_identitas','$no_hp','$tempat_wisata','$tgl_kunjungan','$jmlh_pengunjung','$pengunjung_anak','$harga','$diskon','$totals')");
if ($pesan) {
    echo "<script> alert ('Data Berhasil Disimpan')</script>";
    header("refresh:0;tampilantiket.php?no_identitas=" . $no_identitas);
} else {
    echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
    header("refresh:0;order.php");
}
