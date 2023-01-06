<?php
include 'Koneksi.php';

$no_identitas=$_GET['no_identitas'];
$tiket = mysqli_query($db, "select * from pemesanan where no_identitas='$no_identitas'");
$d = mysqli_fetch_object($tiket);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Tiket</title>
</head>
<link rel="stylesheet" href="script/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="script/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/5.15.3/css/all.min.css" integrity="sha512- iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHI hR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <!--- Navbar --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">LAYANAN TIKET WISATA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="home.php">Home</a>
</li>
</ul>
</div>
    </nav>
    <br>
    <br>

    <!-- Tampilan Tiket Pemesanan -->
    <p>
    <h2 align="center"><b>TIKET WISATA</b></h2>
    <hr width="200"><br>
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

        </tr>
        <tr>
            <td>
                <a href="order.php" class="btn btn-warning">Kembali</a>
                <a href="cetak.php" class="btn btn-info">Cetak</a>
            </td>
        </tr>
    </table>
    <br>
    <br>


</body>

</html>