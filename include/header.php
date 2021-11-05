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
              <li class="dropdown"><a href="" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
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
                    <li><a href="../operator"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="index.php?page=tambahinventaris"><i class="icon mdi mdi-plus"></i><span>Tambah Inventaris</span></a></li>
                    <li><a href="index.php?page=listinventaris"><i class="icon mdi mdi-arrows"></i><span>List Inventaris</span></a></li>
                    <li><a href="index.php?page=tambahpeminjaman"><i class="icon mdi mdi-plus-square"></i><span>Tambah Peminjaman</span></a></li>
                    <li><a href="index.php?page=datapeminjaman"><i class="icon mdi mdi-layers"></i><span>Data Peminjaman</span></a></li>
                   <!--  <li><a href="index.php?page=pengembalian"><i class="icon mdi mdi-face"></i><span>Pengembalian</span></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">