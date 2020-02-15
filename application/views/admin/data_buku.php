<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm">Tambah Buku</i></button>
	<a class="btn btn-warning" href="<?php echo base_url('admin/data_buku/print') ?>"><i class="fa fa-print"></i> Print</a>
	<a class="btn btn-warning" href="<?php echo base_url('admin/data_mahasiswa/pdf') ?>"><i class="fa fa-print"></i> Get PDF</a>
	<a class="btn btn-warning" href="<?php echo base_url('admin/data_mahasiswa/excel') ?>"><i class="fa fa-print"></i> Get Excel</a>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Tanggal Rilis</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no = 1;
		foreach ($buku as $bk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $bk->judul_buku ?></td>
				<td><?php echo $bk->nama_pengarang ?></td>
				<td><?php echo $bk->rilis ?></td>
				<td><?php echo anchor('admin/data_buku/detail/' . $bk->id_buku, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_buku/edit/' . $bk->id_buku, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('admin/data_buku/hapus/' . $bk->id_buku, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Buku</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('admin/data_buku/tambah_aksi'); ?>
				<div class="form-group">
					<label>Judul Buku</label>
					<input type="text" name="judul_buku" class="form-control">
				</div>

				<div class="form-group">
					<label>Pengarang</label>
					<select class="form-control" name="id_pengarang">
						<?php foreach ($pengarang as $pg) : ?>
							<option value="<?= $pg->id_pengarang ?>"><?php echo $pg->nama_pengarang ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label>Rilis</label>
					<input type="date" name="rilis" class="form-control">
				</div>

				<div class="form-group">
					<label>Sinopsis</label>
					<input type="text" name="sinopsis" class="form-control">
				</div>

				<div class="form-group">
					<label>Kategori</label>
					<select class="form-control" name="kategori">
						<option>Agama</option>
						<option>Novel</option>
						<option>Komik</option>
						<option>Edukasi</option>
						<option>Sport</option>
						<option>Ensiklopedia</option>
						<option>Dongeng</option>
						<option>Biographi</option>
						<option>Fotographi</option>
					</select>
				</div>

				<div class="form-group">
					<label>link</label>
					<input type="text" name="link" class="form-control">
				</div>

				<div class="form-group">
					<label>Cover Buku</label>
					<input type="file" name="foto" class="form-control">
				</div>


				<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>

				<?php echo form_close(); ?>
			</div>

		</div>
	</div>
</div>