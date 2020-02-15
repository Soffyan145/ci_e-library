<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Buku Perpus Online</strong></h4>

		<table class="table">
			<tr>
				<th>Judul Buku</th>
				<td><?php echo $detail->judul_buku ?></td>
			</tr>
			<tr>
				<th>Pengarang</th>
				<td><?php echo $detail->id_pengarang ?></td>
			</tr>
			<tr>
				<th>Tanggal Rilis</th>
				<td><?php echo $detail->rilis ?></td>
			</tr>
			<tr>
				<th>Sinopsis</th>
				<td><?php echo $detail->sinopsis ?></td>
			</tr>
			<tr>
				<th>Kategori</th>
				<td><?php echo $detail->kategori ?></td>
			</tr>
			<tr>
				<th>Link Buku</th>
				<td><?php echo $detail->link ?></td>
			</tr>
			<tr>
				<th>Cover Buku</th>
				<td>
					<img src="<?php echo base_url(); ?>assets/images/books/<?php echo $detail->foto; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
	<a href="<?php echo base_url('admin/data_buku/index'); ?>" class="btn btn-primary">Back</a>
	</section>
</div>