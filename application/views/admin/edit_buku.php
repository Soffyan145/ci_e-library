<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data Buku</h3>

	<?php foreach($buku as $bk) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_buku/update' ?>">
			<div class="form-group">
        		<label>Judul Buku</label>
        		<input type="hidden" name="id_buku" value="<?php echo $bk->id_buku ?>" class="form-control">
        		<input type="text" name="judul_buku" value="<?php echo $bk->judul_buku ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Pengarang</label>
        		<input type="text" name="id_pengarang" value="<?php echo $bk->id_pengarang ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Tanggal Rilis</label>
        		<input type="date" name="rilis" value="<?php echo $bk->rilis ?>" class="form-control">
        	</div>
        	
        	<div class="form-group">
        		<label>Sinopsis</label>
        		<input type="text" name="sinopsis" value="<?php echo $bk->sinopsis ?>" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Link Buku</label>
        		<input type="text" name="link" value="<?php echo $bk->link ?>" class="form-control">
        	</div>

        	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>