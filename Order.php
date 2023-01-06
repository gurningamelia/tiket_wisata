<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Order</title>
    </head>
    <link rel="stylesheet" href="script/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <body>
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">LAYANAN TIKET WISATA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <br>
        <br>
        <!-- Form Pemesanan Tiket -->
        <div class="col-8 mx-auto card"  >
            <div class="card-body " id="order">
                <h3 class="text-center">Form Pemesanan</h3><br>
                <form action="proses_order.php" method="post" name="register" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_identitas" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_identitas" name="no_identitas" minlength="16" maxlength="16" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" minlength="10" maxlength="12" required>
                        </div>
                    </div>
                    <div id="main" data-loading="true"></div>
                    <div class="form-group row">
                        <label for="tempat_wisata" class="col-sm-2 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="tempat_wisata" name="tempat_wisata" onclick= "tampilharga()" required>
                                <option value="0">--Pilih Kategori--</option>
                                <option value="1">Way Kambas</option>
                                <option value="2">Pulau Pahawang</option>
                                <option value="3">Teluk Kiluhan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_kunjungan" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jmlh_pengunjung" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jmlh_pengunjung" name="jmlh_pengunjung" min="1" max="100" value="0" onkeyup=imposeMinMax(this)>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengunjung_anak" class="col-sm-2 col-form-label">Pengunjung Anak-Anak (<12)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="pengunjung_anak" name="pengunjung_anak" min="0" max="100" value="0" imposeMinMax1(this)>
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
                        <div class="col-md" >
                            <button type="button" class="btn btn-success" name="hitung" onclick="tambah()">Hitung Total</button>
                            <button type="submit" class="btn btn-primary" name="kirim" id="kirim" value="pesan">Pesan Tiket</button>
                        </div>
                        <div class="col-mx">
                            <a href="home.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <script src="script/script.js"></script>
        </div>
    </div>
    <br>

</body>
</html>























