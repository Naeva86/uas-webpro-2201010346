<?php
$idmasuk = $_GET["p1"];
$sql = "SELECT tu.nama_barang, tu.jenis, tu.stok, tu.harga, tu.total_harga, tu.tgl_masuk FROM tbmsk tu WHERE tu.idmasuk='$idmasuk';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Ubah Data Barang Masuk <?= $h["nama_barang"] ?></h3>
    <form method="POST" action="databarangmasuk.php">
        <input type="hidden" name="act" value="update">
        <input type="hidden" name="idmasuk" value="<?= $idmasuk ?>">
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
            <input type="number" name="txHRG" class="form-control" id="floatingInput" placeholder="Input Harga">
            <label for="floatingInput">Harga</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="txTTL" class="form-control" id="floatingInput" placeholder="Input Total Harga">
            <label for="floatingInput">Total Harga</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="txTGL_MASUK" class="form-control" id="floatingInput" placeholder="Input Tanggal Masuk">
            <label for="floatingInput">Tanggal Masuk</label>
        </div>
        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-primary"> Ubah Data Barang </button>
        <a href="databarangmasuk.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='databarangmasuk.php';</script>";
}
?>