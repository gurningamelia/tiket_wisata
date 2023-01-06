<?php
include 'Koneksi.php';

$tiket = mysqli_query($db, "SELECT * FROM pemesanan");
$d = mysqli_fetch_object($tiket);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Tiket</title>
</head>
<link rel="stylesheet" href="script/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="index.css">

<body>
    <!-- Tampilan Tiket Pemesanan -->
    <h1 align="center"><b><i>TIKET WISATA</b></i></h1>
    <hr width="300"><br>
    <table align="center" cellpadding="3" align="center" width="500">
        <tr>
            <td>Nama</td>
            <td>: <?php echo $d->nama ?></td>
        </tr>
        <tr>
            <td>Nomor Identitas</td>
            <td>: <?php echo $d->no_identitas ?></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>: <?php echo $d->no_hp ?></td>
        </tr>
        <tr>
            <td>Tempat Wisata</td>
            <td>: <?php echo $d->tempat_wisata ?></td>
        </tr>
        <tr>
            <td>Jumlah Pengunjung</td>
            <td>: <?php echo $d->jmlh_pengunjung ?> orang</td>
        </tr>
        <tr>
            <td>Pengunjung Anak-Anak</td>
            <td> : <?php echo $d->pengunjung_anak ?> orang</td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td>: Rp. <?php echo $d->harga ?></td>
        </tr>
        <tr>
            <td>Potongan Harga</td>
            <td>: (Rp. <?php echo $d->diskon ?> )</td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>: Rp. <?php echo $d->total ?></td>
        </tr>
        <tr>
            <td>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </td>
        </tr>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>