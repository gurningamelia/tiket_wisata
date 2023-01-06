<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Order</title>
</head>
<link rel="stylesheet" href="script/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="script/order.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/5.15.3/css/all.min.css" integrity="sha512- iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHI hR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
<!--- Navbar --->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">LAYANAN TIKET WISATA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home<span class="sr- only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="index.php">Tempat Wisata</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#order.php">Pesan Tiket</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="index.php">Kontak</a>
</li>

</ul>
</div>
</nav>
<br>
<br>

<!-- Form Pemesanan Tiket -->
<div class="mx-auto" style="width: 1300px">
<div class="card">
<div class="card-body" id="order">
<h3>Form Pemesanan</h3><br>
<?php
include 'koneksi.php';
$nama = $_GET['nama'];
$data = mysqli_query($db, "SELECT * FROM pemesanan WHERE nama='$nama'");

while ($d = mysqli_fetch_array($data)) {
?>
<form action="aksi_edit.php" method="post" name="register" enctype="multipart/form- data">
<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama']; ?>">
</div>

</div>
<div class="form-group row">
<label for="no_identitas" class="col-sm-2 col-form-label">Nomor Identitas</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="no_identitas" name="no_identitas" value="<?php echo $d['no_identitas']; ?>">
</div>
</div>
<div class="form-group row">
<label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $d['no_hp']; ?>">
</div>
</div>
<div class="form-group row">
<label for="tempat_wisata" class="col-sm-2 col-form-label">Tempat Wisata</label>
<div class="col-sm-10">
<select class="form-control" id="tempat_wisata" name="tempat_wisata" value="<?php echo $d['tempat_wisata']; ?>">
<option value="Pulau Pahawang">Pulau Pahawang</option>
<option value="Pantai Dewi Mandapa">Pantai Dewi Mandapa </option>
<option value="Way Kambas">Way Kambas</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="tgl_kunjungan" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" value="<?php echo $d['tgl_kunjungan']; ?>">
</div>
</div>
<div class="form-group row">
<label for="jmlh_pengunjung" class="col-sm-2 col-form-label">Jumlah Pengunjung</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="jmlh_pengunjung" name="jmlh_pengunjung" min="1" max="10" value="<?php echo $d['jmlh_pengunjung']; ?>" onkeyup=imposeMinMax(this)>
</div>
</div>
<div class="form-group row">
<label for="pengunjung_anak" class="col-sm-2 col-form-label">Pengunjung Anak- Anak <span class="usia">Usia di bawah 12 tahun</span></label>
<div class="col-sm-10">
<input type="number" class="form-control" id="pengunjung_anak" name="pengunjung_anak" min="0" max="10" value="<?php echo $d['pengunjung_anak']; ?>" imposeMinMax1(this)>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="harga">Harga Tiket</label>
<div class="col-sm-10">
<!-- <h5><input type="text" name="tampilharga" readonly></h5> -->
<h5 id="tampilharga"></h5>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="diskon">Potongan Diskon</label>
<div class="col-sm-10">
<!-- <h5><input type="text" name="tampiltotal" readonly></h5> -->
<h5 id="tampildiskon"></h5>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="total">Total Bayar</label>
<div class="col-sm-10">
<!-- <h5><input type="text" name="tampiltotal" readonly></h5> -->
<h5 id="tampiltotal"></h5>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="status"></label>
<div class="col-sm-10">
<!-- <h5><input type="text" name="status" readonly></h5> -->
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" name="checkbox" value="check" id="setuju" required="">
<label class="form-check-label setuju">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</label>
</div>
</div>
<div class="form-group row">
<div class="col-md">
<button type="button" class="btn btn-dark" name="hitung" onclick="tambah()">Hitung Total</button>
</div>
<div class="col-md">
<button type="submit" class="btn btn-dark" name="kirim" id="kirim" value="pesan">Ubah</button>
</div>
<div class="col-md">
<button type="reset" class="btn btn-dark" name="cancel">Cancel</button>
</div>
</div>
</form>
<?php
}
?>
</div>
<script src="script/script.js"></script>
</div>
</div>
<br>

<!-- footer -->
<footer id="kontak">
<p>Kontak Kami</p>
<p>Layanan Tiket Wisata</p>
<div class="sosmed">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-dribbble"></i></a>
</div>
<p class="end">CopyRight By @</p>
</footer>

</body>
</html>
