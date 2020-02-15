<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data Anggota</h3>

	<?php foreach($anggota as $bk) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_anggota/update' ?>">
			<div class="form-group">
        		<label>Nama</label>
        		<input type="hidden" name="id_anggota" value="<?php echo $bk->id_anggota ?>" class="form-control">
        		<input type="text" name="nama_anggota" value="<?php echo $bk->nama_anggota ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Alamat</label>
        		<input type="text" name="alamat" value="<?php echo $bk->alamat ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>No Telp</label>
        		<input type="number" name="no_telp" value="<?php echo $bk->no_telp ?>" class="form-control">
        	</div>

        	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>