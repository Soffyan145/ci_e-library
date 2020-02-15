<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Alamat</th>
            <th>Email</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php 
        $no=1;
        foreach ($anggota as $agt) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo  $agt->nama_anggota ?></td>
            <td><?php echo  $agt->alamat ?></td>
            <td><?php echo  $agt->email ?></td>
            <td><?php echo anchor('admin/data_anggota/detail/'.$agt->id_anggota,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_anggota/edit/' .$agt->id_anggota, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('admin/data_anggota/hapus/' .$agt->id_anggota, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>
