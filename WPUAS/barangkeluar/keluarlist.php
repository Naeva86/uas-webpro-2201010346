<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">JENIS</th>
                <th scope="col">JUMLAH</th>
                <th scope="col">TANGGAL KELUAR</th>
                <th scope="col"><a href="databarangkeluar.php?aksi=new" class="btn btn-primary">&nbsp;Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tu.nama_barangk, tu.jenisk, tu.jumlah, tu.tgl_keluar,tu.idkeluar FROM tbkeluar tu ORDER BY tu.nama_barangk;";
            $hasil = mysqli_query($cnn, $sql);
            $cx = 0;
            while ($h = mysqli_fetch_assoc($hasil)) {
                $cx++;
            ?>
                <tr>
                    <th scope="row"><?= $cx ?></th>
                    <td><?= $h["nama_barangk"] ?></td>
                    <td><?= $h["jenisk"] ?></td>
                    <td><?= $h["jumlah"] ?></td>
                    <td><?= $h["tgl_keluar"] ?></td>
                    <td>
                        <a href="databarangkeluar.php?aksi=edit&p1=<?= $h["idkeluar"] ?>" class="btn btn-warning">&nbsp;Edit</a>
                        <a href="databarangkeluar.php?aksi=del&p1=<?= $h["idkeluar"] ?>" class="btn btn-danger">&nbsp;Del</a>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>