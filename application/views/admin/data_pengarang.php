<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pengarang"><i class=" fas fa-plus fa-sm"> Tambah Pengarang</i></button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php 
        $no=1;
        foreach ($pengarang as $pg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo  $pg->nama_pengarang ?></td>
            <td><?php echo  $pg->email ?></td>
            <td><?php echo anchor('admin/data_pengarang/detail/'.$pg->id_pengarang,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_pengarang/edit/' .$pg->id_pengarang, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('admin/data_pengarang/hapus/' .$pg->id_pengarang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<div class="modal fade" id="tambah_pengarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_pengarang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Pengarang</label>
                <input type="text" name="nama_pengarang" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto_pengarang" class="form-control">
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">reset</button>
        <button type="submit" class="btn btn-primary">Add Pengarang</button>
      </div>
      </form>
    </div>
  </div>
</div>