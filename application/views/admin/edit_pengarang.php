<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data Pengarang</h3>

	<?php foreach($pengarang as $pg) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_pengarang/update' ?>">
			<div class="form-group">
        		<label>Nama Pengarang</label>
        		<input type="hidden" name="id_pengarang" value="<?php echo $pg->id_pengarang ?>" class="form-control">
        		<input type="text" name="nama_pengarang" value="<?php echo $pg->nama_pengarang ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Email</label>
        		<input type="text" name="email" value="<?php echo $pg->email ?>" class="form-control">
        	</div>

        	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>