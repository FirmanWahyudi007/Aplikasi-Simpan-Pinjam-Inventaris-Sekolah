<?php 
  require_once '../config/koneksi.php';
  session_start();
  if ($_SESSION['status'] != "Login") {
    # code...
    header("location:../login.php?pesan=belum_login");
  }elseif ($_SESSION['level'] != "ADMIN") {
    # code...
    header("location:../pesan.php?page=akses_gagal");
  }
?>
          <?php 
            include '../include/header.php';
            if (isset($_GET['page'])) {
              # code...
              $page = $_GET['page'];
              switch ($page) {
                case 'listinventaris':
                  # code...
                  include 'listinventaris.php';
                  break;
                case 'tambahinventaris':
                  # code...
                  include 'tambahinventaris.php';
                  break;
                case 'datapeminjaman':
                  # code...
                  include 'datapeminjaman.php';
                  break;

                case 'tambahpeminjaman':
                  # code...
                  include 'tambahpeminjaman.php';
                  break;
                // case 'pengembalian':
                  # code...
                  // include 'pengembalian.php';
                  // break;
                default:
                  # code...
                  echo "<h1>Maaf halaman tidak ada</h1>";
                  break;
              }
            }
            include '../include/footer.php';
           ?>