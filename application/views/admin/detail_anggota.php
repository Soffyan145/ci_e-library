<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Anggota</strong></h4>

		<table class="table">
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail_anggota->id_anggota ?></td>
			</tr>
			<tr>
				<th>Nama Anggota</th>
				<td><?php echo $detail_anggota->nama_anggota ?></td>
			</tr>
            <tr>
				<th>No Telp</th>
				<td><?php echo $detail_anggota->no_telp ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $detail_anggota->email ?></td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail_anggota->foto_anggota; ?>" width="100" height="110">
				</td>
				<td></td>
			</tr>
		</table>
	<a href="<?php echo base_url('admin/data_anggota/index'); ?>" class="btn btn-primary">Back</a>
	</section>
</div>