<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>No</th>
		<th>Judul buku</th>
		<th>Pengarang</th>
		<th>Tgl Rilis</th>
		<th>Kategori</th>
	</tr>
	<?php 

	$no=1;
	foreach($buku as $bk): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $bk->judul_buku ?></td>
		<td><?php echo $bk->nama_pengarang ?></td>
		<td><?php echo $bk->rilis ?></td>
		<td><?php echo $bk->kategori ?></td>
	</tr>
<?php endforeach; ?>
</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>