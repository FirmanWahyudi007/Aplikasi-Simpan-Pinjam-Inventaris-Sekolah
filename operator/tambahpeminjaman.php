<div class="col-xs-12">
	<div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-devider">Tambah Peminjaman </div>
        <div class="panel-body">
        	<form method="post" class="form-horizontal group-border-dashed" autocomplete="off" method="post" action="simpan-peminjaman.php">
                <div class="form-group">
                    <label class="col-sm-3 control-label">ID Peminjaman</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_peminjaman" class="form-control">
                    </div>
                </div>
        		<div class="form-group">
        			<label class="col-sm-3 control-label">ID Pegawai</label>
        			<div class="col-sm-8">
        				<input type="text" name="id_pegawaix" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label class="col-sm-3 control-label">Tanggal Pinjam</label>
        			<div class="col-sm-8">
        				<input type="date" class="form-control" name="tgl_pinjam">
        			</div>
        		</div>
        		<div class="form-group">
        			<label class="col-sm-3 control-label">Tanggal Kembali</label>
        			<div class="col-sm-8">
        				<input type="date" name="tgl_kembali" class="form-control">
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