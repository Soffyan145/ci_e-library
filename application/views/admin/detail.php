<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail data Buku</strong></h4>

		<table class="table">
			<tr>
				<th>ID Buku</th>
				<td><?php echo $detail->id_buku ?></td>
			</tr>
			<tr>
				<th>Judul Buku</th>
				<td><?php echo $detail->judul_buku ?></td>
			</tr>
			<tr>
				<th>Pengarang</th>
				<td><?php echo $detail->nama_pengarang ?></td>
			</tr>
			<tr>
				<th>Tanggal Rilis</th>
				<td><?php echo $detail->rilis ?></td>
			</tr>
			<tr>
				<th>Link</th>
				<td><?php echo $detail->link ?></td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
	<a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary">Back</a>
	</section>
</div>