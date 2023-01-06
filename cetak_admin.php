<?php
include 'Koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>CETAK ADMIN</title>
</head>
<body>
<!-- bagian content -->
<section class="content">
<div class="box">
<table class="table" border="10">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>No. Identitas</th>
<th>No. HP</th>
<th>Tempat Wisata</th>
<th>Tanggal Kunjungan</th>
<th>Jumlah Pengunjung</th>
<th>Pengunjung Anak-Anak</th>
<th>Harga</th>
<th>Diskon</td>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
$data = mysqli_query($db, "select * from pemesanan"); while ($d = mysqli_fetch_array($data)) {

?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $d['nama'] ?></td>
<td><?php echo $d['no_identitas'] ?></td>
<td><?php echo $d['no_hp'] ?></td>
<td><?php echo $d['tempat_wisata'] ?></td>
<td><?php echo $d['tgl_kunjungan'] ?></td>
<td><?php echo $d['jmlh_pengunjung'] ?></td>
<td><?php echo $d['pengunjung_anak'] ?></td>
<td><?php echo $d['harga'] ?></td>
<td><?php echo $d['diskon'] ?></td>
<td><?php echo $d['total'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</section>

<script>
window.print()
</script>

</body>
</html>
