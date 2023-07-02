<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="databarangmasuk.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Input Nama Barang">
        <label for="floatingInput">Nama Barang</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJNS" class="form-control" id="floatingInput" placeholder="Input Jenis">
        <label for="floatingInput">Jenis</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="txSTOK" class="form-control" id="floatingInput" placeholder="Input Stok">
        <label for="floatingInput">Stok</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txHRG" class="form-control" id="floatingInput" placeholder="Input Harga">
        <label for="floatingInput">Harga</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txTTL" class="form-control" id="floatingInput" placeholder="Input Total Harga">
        <label for="floatingInput">Total Harga</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGL_MASUK" class="form-control" id="floatingInput" placeholder="Input Tanggal Masuk">
        <label for="floatingInput">Tanggal Masuk</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Barang Masuk </button>
    <a href="databarangmasuk.php" class="btn btn-secondary"> Batal </a>
</form>
