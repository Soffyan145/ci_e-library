<div class="container-fluid">

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach($request as $rq) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $rq->judul_buku ?></td>
			<td><?php echo $rq->pengarang ?></td>
			<td onclick="javascript: return confirm('Apakah request ini sudah teratasi?..')"><?php echo anchor('admin/data_request/hapus/' .$rq->id_request, '<div class="btn btn-danger btn-sm"><i class="fas fa-clipboard-check"> Tersedia</i></div>') ?></td>
		</tr>

		<?php endforeach; ?>

	</table>
</div>

