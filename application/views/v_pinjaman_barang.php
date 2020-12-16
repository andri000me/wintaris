<html>
<body>
<div class="box">
  <div class="box-header">
    <a data-toggle="modal" href="#ModalAdd" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>
    <a data-toggle="modal" href="#ModalExport" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Export To Excel</a>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

  <!-- <div class="alert alert-info alert dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h4><i class="icon fa fa-info"></i> Penting!</h4>
    <h5>1. Anda tidak akan bisa memakai barang jika jumlah pemakaian lebih besar dari stok barang</h5>
    <h5>2. Periksa kembali kondisi barang apabila pemakaian telah selesai.</h5>
  </div> -->

  <table id="example1" class="table table-bordered table-striped">
    <thead class="thead-default">
      <tr>
        <td><b>No</b></td>
        <td><b>Nama Barang</b></td>
        <td><b>Tanggal Masuk</b></td>
        <td><b>Jumlah</b></td>
        <td><b>Pemberi</b></td>
        <td><b>Deksripsi</b></td>
        <td><b>Aksi</b></td>
      </tr>
    </thead>
    <tbody>
  <?php
  $no = 1;
  foreach($content->result_array() as $i):
    $id   = $i['pinjaman_id'];
    $tgl  = tgl_indo($i['pinjaman_tgl_masuk']);
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $i['pinjaman_nama']; ?></td>
      <td><?php echo $tgl; ?></td>
      <td><?php echo $i['pinjaman_jml']; ?></td> 
      <td><?php echo $i['pinjaman_pemberi']; ?></td>
      <td><?php echo $i['pinjaman_deskripsi']; ?></td>
      <td>
        <a class="btn" href="<?php echo base_url('pinjaman/edit/'.$id);?>" title="Edit Barang"><span class="fa fa-pencil"></span></a>
        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>" title="Hapus Barang"><span class="fa fa-trash"></span></a>
      </td>
    </tr>
  <?php
  $no++;
  endforeach;
  ?>
  </tbody>
</table>
</div>
</div>


<!-- Modal Pinjaman Barang -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Pinjaman</h3>
      </div>
      <!-- Body -->
      <div class="modal-body">

          <!-- Form Tambah Pemakaian -->
          <form class="form-horizontal" action="<?php echo base_url('pinjaman/add');?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Nama Barang *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nm_barang" placeholder="Nama Barang" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Jumlah Barang *</label>
            <div class="col-sm-7">
              <input type="number" class="form-control" name="jml_barang" placeholder="Jumlah Barang" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Tanggal Masuk *</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" name="tgl_pakai" id="datepicker1" placeholder="Tanggal Masuk Barang" required>
            </div>  
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Pemberi Pinjaman *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="pemberi_pinjaman" placeholder="Pemberi Pinjaman" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Deskripsi *</label>
            <div class="col-sm-7">
              <textarea name="deskripsi" class="form-control" placeholder="Deskripsi pembagian pamakaian barang"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-4"></div>
            <div class="col-sm-7">
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Batal</button>
            </div>
          </div>

          </form>
    
      </div> <!-- modal body -->
      <div class="modal-footer">
        <!-- footer -->
      </div>
    </div>
  </div>
</div>
<!-- End Pinjaman Barang -->

<!--Modal Export Pinjaman Barang-->
<div class="modal fade" id="ModalExport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-download"></span> Export To Excel</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('pinjaman/export');?>" method="post" enctype="multipart/form-data">
        
        <div class="modal-body"> 
                      
          <div class="form-group">
            <div class="col-sm-11">
            <i class="fa fa-info"></i> <b>Penting!</b>
              <p>Data yang akan diexport adalah data barang pinjaman.</p>
            </div>
          </div>
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Close</button>
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Lanjut</button>
         </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Export Pinjaman Barang -->

<!-- Modal Edit Pinjaman -->
<?php
foreach ($content->result_array() as $i) :
  $id   = $i['pinjaman_id'];
  $tgl  = date('d-m-Y', strtotime($i['pinjaman_tgl_masuk']));
?>

<div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Edit Pinjaman</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('pinjaman/edit/'.$id); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Nama Barang *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nm_barang" placeholder="Nama Barang" value="<?php echo $i['pinjaman_nama'];?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Jumlah Barang *</label>
            <div class="col-sm-7">
              <input type="number" class="form-control" name="jml_barang" value="<?php echo $i['pinjaman_jml'];?>" placeholder="Jumlah Barang" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Tanggal Masuk *</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" name="pinjaman_tgl" id="datepicker1" value="<?php echo $tgl;?>" placeholder="Tanggal Masuk Barang" required>
            </div>  
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Pemberi Pinjaman *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="pemberi_pinjaman" value="<?php echo $i['pinjaman_pemberi'];?>" placeholder="Pemberi Pinjaman" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Deskripsi *</label>
            <div class="col-sm-7">
              <textarea name="deskripsi" class="form-control" placeholder="Deskripsi pembagian pamakaian barang"><?php echo $i['pinjaman_deskripsi'];?></textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Close</button>
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- End Modal Edit Pinjaman -->

<!-- Hapus Pinjaman -->
<?php 
  foreach ($content->result_array() as $i) :
    $id   = $i['pinjaman_id'];
    $nm   = $i['pinjaman_nama'];
    $tgl  = date('d-m-Y', strtotime($i['pinjaman_tgl_masuk']));
?>
<!--Modal Hapus Pinjaman Barang-->
<div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Hapus Pinjaman Barang</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('pinjaman/delete/'.$id);?>" method="post" enctype="multipart/form-data">
        
        <div class="modal-body"> 
                      
          <div class="form-group">
            <div class="col-sm-11">
              <p>Apakah Anda yakin mau menghapus data pinjaman <b><?php echo $nm;?></b> ?</p>
            </div>
          </div> 
        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Close</button>
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
         </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach;?>