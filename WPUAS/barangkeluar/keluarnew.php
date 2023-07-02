<h3>Tambah Data Barang Keluar</h3>
<form method="POST" action="databarangkeluar.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA_BARANGK" class="form-control" id="floatingInput" placeholder="Masukan Nama Barang">
        <label for="floatingInput">Nama Barang</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJNSK" class="form-control" id="floatingInput" placeholder="Masukan Jenis Barang">
        <label for="floatingInput">Jenis</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="txJML" class="form-control" id="floatingInput" placeholder="Masukan Jumlah Barang">
        <label for="floatingInput">Jumlah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGL_KLR" class="form-control" id="floatingInput" placeholder="Masukan Tanggal Keluar Barang">
        <label for="floatingInput">Tanggal Keluar</label>
    </div>

    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Barang Keluar </button>
    <a href="databarangkeluar.php" class="btn btn-secondary"> Batal </a>
</form>