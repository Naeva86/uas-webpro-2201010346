<?php
$idkeluar = $_GET["p1"];
$sql = "SELECT tu.nama_barangk, tu.jenisk, tu.jumlah, tu.tgl_keluar FROM tbkeluar tu WHERE tu.idkeluar='$idkeluar';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data Barang Keluar <?= $h["nama_barangk"] ?></h3>
    <form method="POST" action="databarangkeluar.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="idkeluar" value="<?= $idkeluar ?>">
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
        <button type="submit" class="btn btn-danger"> Hapus Data Barang Keluar </button>
        <a href="databarangkeluar.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='databarangkeluar.php';</script>";
}
?>