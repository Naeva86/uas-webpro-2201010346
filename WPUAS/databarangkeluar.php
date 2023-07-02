<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "barangkeluar/keluarlist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
  $act = $_POST["act"];
  switch ($act) {
    case "store":
      $nama_barangk = $_POST["txNAMA_BARANG"];
      $jenisk = $_POST["txJNSK"];
      $jumlah = $_POST["txJML"];
      $tgl_keluar = $_POST["txTGL_KLR"];
      $idkeluar = md5($nama_barangk);
      $sql = "INSERT INTO tbkeluar(nama_barangk, jenisk, jumlah, tgl_keluar, idkeluar) VALUES('$nama_barangk', '$jenisk', '$jumlah',  '$tgl_keluar', '$idkeluar');";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Barang Keluar berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Barang Keluar gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "update":
      $nama_barangk = $_POST["txNAMA_BARANG"];
      $jenisk = $_POST["txJNSK"];
      $jumlah = $_POST["txJML"];
      $tgl_keluar = $_POST["txTGL_KLR"];
      $idkeluar = $_POST["idkeluar"];
      $sql = "UPDATE tbkeluar SET nama_barangk='$nama_barangk', jenisk='$jenisk', jumlah='$jumlah', tgl_keluar='$tgl_keluar' WHERE idkeluar='$idkeluar';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Barang Keluar berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Barang Keluar gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }

      break;
    case "destroy":
      $idkeluar = $_POST['idkeluar'];
      $sql = "DELETE FROM tbkeluar WHERE idkeluar='$idkeluar';";
      $hasil = mysqli_query($cnn, $sql);
      if ($hasil) {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Barang keluar berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      } else {
        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Barang keluar gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
      }
      break;
  }
}

if (isset($_GET["aksi"])) {
  $aksi = $_GET["aksi"];
  switch ($aksi) {
    case "new":
      $jdpage = "Tambah";
      $pg = "barangkeluar/keluarnew.php";
      break;
    case "edit":
      $jdpage = "Ubah";
      $pg = "barangkeluar/keluaredit.php";
      break;
    case "del":
      $jdpage = "Hapus";
      $pg = "barangkeluar/keluardel.php";
      break;
    default:
      $jdpage = "List";
      $pg = "barangkeluar/keluarlist.php";
  }
}
?>
<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $jdpage ?> - Data Barang Keluar</title>
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link href="assets/css/dashboard.rtl.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>



  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboard.php">MahaNanda Laundry</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="databarangmasuk.php">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Barang Masuk
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="databarangkeluar.php">
                <span data-feather="book" class="align-text-bottom"></span>
                Data Barang Keluar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datauser.php">
                <span data-feather="user" class="align-text-bottom"></span>
                Data User
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Data Barang Keluar</h1>
        </div>
        <?php
        include($pg);
        ?>
      </main>
    </div>
  </div>


  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/dashboard.js"></script>
  <?= $footer; ?>
</body>

</html>