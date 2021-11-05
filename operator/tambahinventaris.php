<?php
  $nama_valid = true;
  $kode = "";
  $nama = ""; 
  $jumlah = "";
  $keterangan = "";
  $kondisi = "";
  $tgl;  
  $jumlah_msg = "";
  $nama_msg ="";
  $kondisiErr = "";
  $kodeErr = "";
  $namaErr = "";
  $jenisErr = "";
  $ruangErr = "";
  $keteranganErr = "";
  $tglErr = "";
  if (isset($_POST['tambah'])) {
    # code...
    $kode = $_POST['kode_invetaris'];
    $nama = $_POST['nama_barang'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];
    $jenis = $_POST['jenis'];
    $ruang = $_POST['ruang'];
    $tgl  = $_POST['tgl'];

    if (empty($kode)) {
      # code...
      $kodeErr = "Isi masih kosong.<br>";
    }
    if (empty($nama)) {
      # code...
      $namaErr = "Isi masih kosong.<br>";
    }else if(!preg_match("/^[a-z A-Z]*$/", $nama)) {
      # code...
      $nama_valid = false;
      $namaErr = "Tolong Isi nama dengan huruf.<br>";
    }
    if (empty($keterangan)) {
      # code...
      $keteranganErr = "Isi masih kosong.<br>";
    }
    if (empty($jenis)) {
      # code...
      $jenisErr = "Isi masih kosong.<br>";
    }
    if (empty($kondisi)) {
      # code...
      $kondisiErr = "Isi masih kosong.<br>";
    }
    if (empty($ruang)) {
      # code...
      $ruangErr = "Isi masih kosong.<br>";
    }
    if (empty($tgl)) {
      # code...
      $tglErr = "Isi masih kosong.<br>";
    }
     if (empty($jenis)) {
      # code...
      $jenisErr = "Isi masih kosong.<br>";
    }
     if (empty($ruang)) {
      # code...
      $ruangErr = "Isi masih kosong.<br>";
    }
     if (empty($jumlah)) {
      # code...
      $jumlah_msg = "Isi masih kosong.<br>";
    }
     $id = $_SESSION['id'];
     $insert = mysqli_query($koneksi,"insert into inventaris values('','$nama','$kondisi','$keterangan','$jumlah','$jenis','$tgl','$ruang','$id','$kode')");
      if ($insert) {
        # code...
        echo "<div role='alert' class='alert alert-success alert-dismissible'>
                    <button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='mdi mdi-close'></span></button><span class='icon mdi mdi-check'></span>Data Berhasil Ditambah
                  </div>";
      }else{
        echo "<div role='alert' class='alert alert-warning alert-dismissible'>
                    <button type='button' data-dismiss='alert' aria-label='Close' class='close'><span aria-hidden='true' class='mdi mdi-close'></span></button><span class='icon mdi mdi-alert-triangle'></span>Data Gagal Di input
                  </div>".mysqli_error($koneksi);
      }
  }
 ?>
          <div class="col-xs-12">
           <div class="panel panel-default panel-border-color panel-border-color-primary">
             <div class="panel-heading panel-heading-devider">Tambah Inventaris</div>
             <div class="panel-body">
               <form method="post" class="form-horizontal group-border-dashed" autocomplete="off">
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Kode Invetaris</label>
                   <div class="col-sm-8">
                     <input type="text" name="kode_invetaris" class="form-control" value="<?php echo $kode; ?>" >
                     <?php echo $kodeErr; ?>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Nama</label>
                   <div class="col-sm-8">
                     <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?php echo $nama; ?>">
                     <?php echo $namaErr; ?>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Keterangan</label>
                   <div class="col-sm-8">
                      <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan; ?>">
                     <?php echo $keteranganErr; ?>
                   </div>
                 </div><br>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Regis </label>
                  <div class="col-sm-6">
                    <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                      <input size="16" type="text" value="" name="tgl" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      <?php echo $tglErr; ?>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Status</label>
                   <div class="col-sm-8">
                     <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>">
                     <?php echo $jumlah_msg; ?>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Kondisi</label>
                   <div class="col-sm-8">
                     <input type="text" name="kondisi" class="form-control" value="<?php echo $kondisi; ?>">
                     <?php echo $kondisiErr; ?>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Jenis</label>
                   <div class="col-sm-8">
                     <select class="form-control" name="jenis">
                      <option>Silahkan Pilih..........</option>
                       <?php 
                            $jenis = mysqli_query($koneksi,"select * from jenis");
                            if (mysqli_num_rows($jenis)>0) {
                              # code...
                              while ($data = mysqli_fetch_array($jenis)) {
                                # code...
                                echo "<option value='".$data[id_jenis]."'>".$data[nama_jenis]."</option>";
                              }
                            }
                        ?>
                     </select>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-sm-3 control-label">Ruang</label>
                   <div class="col-sm-8">
                     <select class="form-control" name="ruang">
                      <option>Silahkan Pilih..........</option>
                       <?php 
                            $id = $_SESSION['id'];
                            $ruang = mysqli_query($koneksi,"select r.nama_ruang,r.id_ruang FROM ruang r join petugas p ON r.id_ruang=p.id_ruang WHERE p.id_petugas = $id");
                            if (mysqli_num_rows($ruang)>0) {
                              # code...
                              while ($data = mysqli_fetch_array($ruang)) {
                                # code...
                                echo "<option value='".$data[id_ruang]."'>".$data[nama_ruang]."</option>";
                              }
                            }
                        ?>
                     </select>
                   </div>
                 </div>
                 <div class="col-sm-11">
                        <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary" name="tambah">Tambah</button>
                          <button class="btn btn-space btn-default" name="clear">Cancel</button>
                        </p>
                  </div>
               </form>
             </div>
           </div>
         </div>