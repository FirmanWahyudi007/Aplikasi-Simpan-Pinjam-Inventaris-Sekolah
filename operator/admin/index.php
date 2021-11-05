<?php 
  require_once '../config/koneksi.php';
  session_start();
  if ($_SESSION['status'] != "Login") {
    # code...
    header("location:../login.php?pesan=belum_login");
  }elseif ($_SESSION['level'] != "ADMIN UTAMA") {
    # code...
    header("location:../pesan.php?page=akses_gagal");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inventaris</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/logo-s.png">
    <link rel="stylesheet" type="text/css" href="../assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css"/>
    <!--CSS Tambahan-->

    <link rel="stylesheet" type="text/css" href="../assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../assets/img/avatar.png" alt="Avatar"><span class="user-name"><?php echo $_SESSION['nama']; ?></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $_SESSION['nama']; ?></div>
                  <li><a href="../logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper">
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                    <li><a href="../admin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
                    <li class="parent"><a href="#"><i class="icon mdi mdi-view-agenda"></i><span>Data Inventaris</span></a>
                      <ul class="sub-menu">
                        <li><a href="index.php?page=listinventaris">List Inventaris</a></li>
                      </ul>
                    </li>
                    <li><a href="index.php?page=datapeminjaman"><i class="icon mdi mdi-file-text"></i><span>Data Peminjaman</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          <?php
            if (isset($_GET['page'])) {
              # code...
              $page = $_GET['page'];
              switch ($page) {
                case 'listuser':
                  # code...
                  include 'user.php';
                  break;

                case 'tambahinventaris':
                  # code...
                  include 'tbhinventaris.php';
                  break;

                case 'laporan':
                  # code...
                  include 'laporan.php';
                  break;
                
                case 'listinventaris':
                  # code...
                  include 'inventaris.php';
                  break;

                case 'datapeminjaman':
                  # code...
                  include 'peminjaman.php';
                  break;

                default:
                  # code...
                  echo "<h1>Maaf halaman tidak ada</h1>";
                  break;
              }
            }else{
                echo "<h1>Selamat Datang</h1>";
            }
          ?>
        </div>
      </div>
    </div>
    <script src="../assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/main.js" type="text/javascript"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!--JS Tambahan-->
    <script src="../assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="../assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery.maskedinput/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="../assets/js/app-form-masks.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="../assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="../assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="../assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="../assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="../assets/js/app-form-elements.js" type="text/javascript"></script>
    <script src="../assets/js/app-tables-datatables.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
        App.formElements();
      	App.init();
        App.dataTables();
        App.masks();
      });
      
    </script>
  </body>
</html>