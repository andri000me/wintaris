<div class="box">
  <div class="box-header">
    <a data-toggle="modal" href="#ModalAdd" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</a>
    <a data-toggle="modal" href="#ModalImport" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Import</a>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead class="thead-default">
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Bidang Study</th>
        <th>Telphone</th>
        <th>Foto</th>
        <th style="text-align:right;">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1; 
      foreach ($content->result_array() as $i) :
        $id           = $i['guru_id'];
        $nip          = $i['guru_nip'];
        $nama         = $i['guru_nama'];
        $study        = $i['guru_bid_study'];
        $alamat       = $i['guru_alamat'];
        $telp         = $i['guru_telp'];
        $foto         = $i['guru_foto'];
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $nip; ?></td>
          <td><?php echo $nama; ?></td>
          <td><?php echo $study; ?></td>
          <td><?php echo $telp; ?></td>
          <?php if(empty($foto)):?>
            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/img/no-image.jpg';?>"></td>
          <?php else:?>
            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url('assets/foto/guru/'.$foto); ?>"></td>
          <?php endif;?>
          <td style="text-align:right;">
            <a class="btn" data-toggle="modal" data-target="#ModalDetail<?php echo $id;?>"><span class="fa fa-eye"></span></a>
            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
            <a class="btn==" data-toggle="modal" data-target="#ModalHapus<?php echo $nip;?>"><span class="fa fa-trash"></span></a>
          </td>
        </tr>
      <?php endforeach ?>
  </tbody>
</table>
</div>
</div>

<!-- Modal Add Guru-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('guru/add');?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">NIP *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nip" placeholder="Nomor Induk Pegawai" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Guru *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nama" placeholder="Nama Guru" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Bidang Study *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_study" placeholder="Bidang Study" required>
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

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Foto :</label>
            <div class="col-sm-7">
              <input type="file" name="filefoto"/>
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
<!-- End Modal Add Guru -->

<!-- Modal Add Import-->
<div class="modal fade" id="ModalImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Import Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('guru/import');?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <div class="col-sm-12">
              <p><strong>Penting:</strong></p>
              <p>1. Silahkan download format import data guru <a href="<?php echo base_url('assets/file/guru/format_import_guru.xls');?>">di sini</a>.<br>
              2. Isi data dengan benar sesuai kolom yang sudah ada.<br>
              3. Setelah data diisi, silahkan upload lalu klik menu <b>import</b>.<br>
              4. Proses import selesai.<br>
              5. Jika terjadi error silahkan cek kembali format yang Anda isi.</p>
            </div>
          </div>

          <div class="form-grup">
            <label for="exampleUsername">File *</label>
            <input type="file" name="fileimport"/>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Close</button>
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Import</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Add Import -->


<!-- Modal Detail Guru -->
<?php
foreach ($content->result_array() as $i) :
  $id           = $i['guru_id'];
  $nip          = $i['guru_nip'];
  $nama         = $i['guru_nama'];
  $study        = $i['guru_bid_study'];
  $alamat       = $i['guru_alamat'];
  $telp         = $i['guru_telp'];
  $foto         = $i['guru_foto'];
?>
<div class="modal fade" id="ModalDetail<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="fa fa-eye"></span> Detail Guru</h3>
      </div>
      <div class="modal-body">        
        <table class="table table-bordered table-striped">
          <tr>
            <td width="150">NIP</td>
            <td align="center" width="10">:</td>
            <td><?php echo $nip; ?></td>
          </tr>
          <tr>
            <td>Nama Guru</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
          </tr>
          <tr>
            <td>Bidang Study</td>
            <td>:</td>
            <td><?php echo $study; ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat; ?></td>
          </tr>
          <tr>
            <td>Telp</td>
            <td>:</td>
            <td><?php echo $telp; ?></td>
          </tr>
          <?php if(empty($foto)):?>
            <tr>
              <td>Foto</td>
              <td align="center">:</td>
              <td><img width="100" src="<?php echo base_url().'assets/img/no-image.jpg';?>"></td>
            </tr>
          <?php else:?>
            <tr>
              <td>Foto</td>
              <td align="center">:</td>
              <td><img width="100" src="<?php echo base_url('assets/foto/guru/'.$foto); ?>"></td>
          <?php endif;?>
        </table>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php   endforeach; ?>
<!-- End Modal Detail Guru -->

<!-- Modal Edit Guru -->

<?php
foreach ($content->result_array() as $i) :
  $id           = $i['guru_id'];
  $nip          = $i['guru_nip'];
  $nama         = $i['guru_nama'];
  $study        = $i['guru_bid_study'];
  $alamat       = $i['guru_alamat'];
  $telp         = $i['guru_telp'];
  $foto         = $i['guru_foto'];
?>

<div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Edit Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('guru/edit/'.$id); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">NIP *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nip" value="<?php echo $nip ?>" placeholder="Nomor Induk Pegawai" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Guru *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_nama" value="<?php echo $nama ?>" placeholder="Nama Guru" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Bidang Study *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_study" value="<?php echo $study ?>" placeholder="Bidang Study" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Alamat *</label>
            <div class="col-sm-7">
              <textarea name="ws_alamat" class="form-control" placeholder="Alamat" required><?php echo $alamat ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Telphone *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ws_telp" value="<?php echo $telp ?>" placeholder="08** **** ****" required>
            </div>
          </div>

          <?php if(empty($foto)):?>
          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Foto Sebelumnya *</label>
            <div class="col-sm-7">
              <td><img width="100" src="<?php echo base_url().'assets/img/no-image.jpg';?>"></td>
            </div>
          </div> 
          <?php else:?>
            <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Foto Sebelumnya *</label>
            <div class="col-sm-7">
              <td><img width="100" src="<?php echo base_url('assets/foto/guru/'.$foto); ?>"></td>
            </div>
          </div> 
          <?php endif;?>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Ganti Foto :</label>
            <div class="col-sm-7">
              <input type="file" name="filefoto"/>
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
<!-- End Modal Edit Guru -->

<!-- Modal Hapus Guru -->

<?php 
  foreach ($content->result_array() as $i) :
  $id           = $i['guru_id'];
  $nip          = $i['guru_nip'];
  $nama         = $i['guru_nama'];
  $study        = $i['guru_bid_study'];
  $alamat       = $i['guru_alamat'];
  $telp         = $i['guru_telp'];
  $foto         = $i['guru_foto'];
?>

<div class="modal fade" id="ModalHapus<?php echo $nip;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Hapus Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('guru/delete/'.$nip);?>" method="post" enctype="multipart/form-data">
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
<!-- End Modal Hapus Guru -->