<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tampilan Halaman Admin</title>
</head>
<link rel="stylesheet" href="script/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="script/order.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font- awesome/5.15.3/css/all.min.css" integrity="sha512- iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHI hR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


         <!-- TABLES-->
         <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <!-- Tables SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src= "https://cdn.datatables.net/fixedcolumns/4.0.2/js/dataTables.fixedColumns.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.0.2/css/fixedColumns.bootstrap4.min.css"></script>

  <script type="text/javascript">
$(document).ready(function() {
    var table = $('#ex').DataTable( {
        scrollY:        "900px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        fixedColumns:   true
    } );
} );
      </script>

<body>
<!--- Navbar --->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">LAYANAN TIKET WISATA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="home.php">Log Out</a>
</li>
</ul>
</div>
</nav>
<br>

<!-- bagian content -->
<section class="content">
<div class="box">

<div class="container">
<a class="btn btn-success" href="cetak_admin.php" target="_blank">Print</a>

        <div class="header">
            <center><h1><b>DATA PEMESANAN</b></h1></center>
        </div>


       <div class="col-lg-12">
<table class="table table-responsive table-bordered" id="ex">
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
<th>Aksi</th>
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
<td>
<!-- <a href="edit.php?nama=<?php echo $d['nama']; ?>"><button>EDIT</button></a> -->
<a href="hapus.php?nama=<?php echo $d['nama'];
?>"><button class="btn btn-danger">HAPUS</button></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</section>

</body>
</html>
