<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">JENIS</th>
                <th scope="col">STOK</th>
                <th scope="col">HARGA</th>
                <th scope="col">TOTAL HARGA</th>
                <th scope="col">TANGGAL MASUK</th>
                <th scope="col"><a href="databarangmasuk.php?aksi=new" class="btn btn-primary">&nbsp;Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tu.nama_barang, tu.jenis, tu.stok, tu.harga, tu.total_harga, tu.tgl_masuk, tu.idmasuk FROM tbmsk tu ORDER BY tu.nama_barang;";
            $hasil = mysqli_query($cnn, $sql);
            $cx = 0;
            while ($h = mysqli_fetch_assoc($hasil)) {
                $cx++;
            ?>
                <tr>
                    <th scope="row"><?= $cx ?></th>
                    <td><?= $h["nama_barang"] ?></td>
                    <td><?= $h["jenis"] ?></td>
                    <td><?= $h["stok"] ?></td>
                    <td><?= $h["harga"] ?></td>
                    <td><?= $h["total_harga"] ?></td>
                    <td><?= $h["tgl_masuk"] ?></td>
                    <td>
                        <a href="databarangmasuk.php?aksi=edit&p1=<?= $h["idmasuk"] ?>" class="btn btn-warning">&nbsp;Edit</a>
                        <a href="databarangmasuk.php?aksi=del&p1=<?= $h["idmasuk"] ?>" class="btn btn-danger">&nbsp;Del</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>