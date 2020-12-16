<div class="box">
  <div class="box-header">
    <a data-toggle="modal" href="#ModalAdd" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead class="thead-default">
      <tr>
        <th>No</th>
        <th>Nama Sekolah</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th style="text-align:right;">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1; 
      foreach ($content->result_array() as $i) :
        $id           = $i['sekolah_id'];
        $nama         = $i['sekolah_nama'];
        $alamat       = $i['sekolah_alamat'];
        $telp         = $i['sekolah_telp'];
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $nama; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $telp; ?></td>
          <td style="text-align:right;">
            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
          </td>
        </tr>
      <?php endforeach ?>
  </tbody>
</table>
</div>
</div>

<!-- Modal Add Sekolah-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Sekolah</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('sekolah/add');?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Sekolah *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nama" placeholder="Nama Sekolah" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Alamat *</label>
            <div class="col-sm-7">
              <textarea name="ws_alamat" class="form-control" placeholder="Alamat" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Telphone *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_telp" placeholder="08** **** ****" required>
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
<!-- End Modal Add Sekolah -->

<!-- Modal Edit Sekolah -->

<?php
foreach ($content->result_array() as $i) :
  $id           = $i['sekolah_id'];
  $nama         = $i['sekolah_nama'];
  $alamat       = $i['sekolah_alamat'];
  $telp         = $i['sekolah_telp'];
?>

<div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Edit Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('sekolah/edit/'.$id); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Sekolah *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nama" value="<?php echo $nama; ?>" placeholder="Nama Sekolah" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Alamat *</label>
            <div class="col-sm-7">
              <textarea name="ws_alamat" class="form-control" placeholder="Alamat" required><?php echo $alamat;?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Telphone *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_telp" value="<?php echo $telp; ?>" placeholder="08** **** ****" required>
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
<!-- End Modal Edit Sekolah -->

<!-- Modal Hapus Sekolah -->

<?php 
  foreach ($content->result_array() as $i) :
  $id           = $i['sekolah_id'];
  $nama         = $i['sekolah_nama'];
  $alamat       = $i['sekolah_alamat'];
  $telp         = $i['sekolah_telp'];
?>

<div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Hapus Sekolah</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('sekolah/delete/'.$id);?>" method="post" enctype="multipart/form-data">
      <div class="modal-body"> 
                      
        <div class="form-group">
          <div class="col-sm-11">
            <p>Apakah Anda yakin mau menghapus data <b><?php echo $nama;?></b> ?</p>
          </div>
        </div> 

        <div class="form-group">
          <div class="col-sm-11">
            <strong>Penting!</strong>
            <br>
            Anda tidak akan bisa menghapus data ini jika data tersebut sedang digunakan pada data peminjaman barang!
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
<!-- End Modal Hapus Sekolah -->