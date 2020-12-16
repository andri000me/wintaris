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
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Telphone</th>
        <th>Foto</th>
        <th style="text-align:right;">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1; 
      foreach ($content->result_array() as $i) :
        $id           = $i['id'];
        $nis          = $i['nis'];
        $nama         = $i['nama_siswa'];
        $kelas        = $i['kelas'];
        $alamat       = $i['alamat'];
        $ayah         = $i['nama_ayah'];
        $ibu          = $i['nama_ibu'];
        $telp         = $i['no_telp'];
        $foto         = $i['foto'];
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $nis; ?></td>
          <td><?php echo $nama; ?></td>
          <td><?php echo $kelas; ?></td>
          <td><?php echo $telp; ?></td>
          <?php if(empty($foto)):?>
            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/img/people.jpg';?>"></td>
          <?php else:?>
            <td><img width="40" height="40" class="img-circle" src="<?php echo base_url('assets/foto/siswa/'.$foto); ?>"></td>
          <?php endif;?>
          <td style="text-align:right;">
            <a class="btn" data-toggle="modal" data-target="#ModalDetail<?php echo $id;?>"><span class="fa fa-eye"></span></a>
            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $nis;?>"><span class="fa fa-trash"></span></a>
          </td>
        </tr>
      <?php endforeach ?>
  </tbody>
</table>
</div>
</div>

<!-- Modal Add Siswa-->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Siswa</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url().'admin/tambah_siswa'?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">NIS *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Siswa *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Kelas *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Alamat *</label>
            <div class="col-sm-7">
              <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Ayah *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Telphone *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="telp" placeholder="08** **** ****" required>
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
<!-- End Modal Add Siswa -->

<!-- Modal Add Import-->
<div class="modal fade" id="ModalImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus-sign"></span> Import Siswa</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url().'admin/import_siswa'?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <div class="col-sm-12">
              <p><strong>Penting:</strong></p>
              <p>1. Silahkan download format import data siswa <a href="<?php echo base_url('assets/file/siswa/format_import_siswa.xls');?>">di sini</a>.<br>
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

<!-- Modal Detail Siswa -->
<?php
foreach ($content->result_array() as $i) :
  $id           = $i['id'];
  $nis          = $i['nis'];
  $nama         = $i['nama_siswa'];
  $kelas        = $i['kelas'];
  $alamat       = $i['alamat'];
  $ayah         = $i['nama_ayah'];
  $ibu          = $i['nama_ibu'];
  $telp         = $i['no_telp'];
  $foto         = $i['foto'];
?>
<div class="modal fade" id="ModalDetail<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="fa fa-eye"></span> Detail Siswa</h3>
      </div>
      <div class="modal-body">        
        <table class="table table-bordered table-striped">
          <tr>
            <td width="150">NIS</td>
            <td width="15" align="center">:</td>
            <td><?php echo $nis; ?></td>
          </tr>
          <tr>
            <td>Nama Siswa</td>
            <td align="center">:</td>
            <td><?php echo $nama; ?></td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td align="center">:</td>
            <td><?php echo $kelas; ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td align="center">:</td>
            <td><?php echo $alamat; ?></td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td align="center">:</td>
            <td><?php echo $ayah; ?></td>
          </tr>
          <tr>
            <td>Nama Ibu</td>
            <td align="center">:</td>
            <td><?php echo $ibu; ?></td>
          </tr>
          <tr>
            <td>Telp</td>
            <td align="center">:</td>
            <td><?php echo $telp; ?></td>
          </tr>
          <?php if(empty($foto)):?>
            <tr>
              <td>Foto</td>
              <td align="center">:</td>
              <td><img width="100" src="<?php echo base_url().'assets/img/people.jpg';?>"></td>
            </tr>
          <?php else:?>
            <tr>
              <td>Foto</td>
              <td align="center">:</td>
              <td><img width="100" src="<?php echo base_url('assets/foto/siswa/'.$foto); ?>"></td>
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
<!-- End Modal Detail Siswa -->

<!-- Modal Edit Siswa -->

<?php
foreach ($content->result_array() as $i) :
  $id           = $i['id'];
  $nis          = $i['nis'];
  $nama         = $i['nama_siswa'];
  $kelas        = $i['kelas'];
  $alamat       = $i['alamat'];
  $ayah         = $i['nama_ayah'];
  $ibu          = $i['nama_ibu'];
  $telp         = $i['no_telp'];
  $foto         = $i['foto'];
?>

<div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pencil"></span> Edit Siswa</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('admin/edit_siswa/'.$id); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">NIS *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>" placeholder="Nomor Induk Siswa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Siswa *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama"  value="<?php echo $nama; ?>"placeholder="Nama Siswa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Kelas *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kelas"  value="<?php echo $kelas; ?>"placeholder="kelas" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Alamat *</label>
            <div class="col-sm-7">
              <textarea name="alamat" class="form-control" placeholder="Alamat" required><?php echo $alamat; ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Ayah *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ayah" value="<?php echo $ayah; ?>"placeholder="Nama Ayah" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="ibu" value="<?php echo $ibu; ?>"placeholder="Nama Ibu" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Telphone *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="telp"  value="<?php echo $telp; ?>"placeholder="08** **** ****" required>
            </div>
          </div>

          <?php if(empty($foto)):?>
          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Foto Sebelumnya *</label>
            <div class="col-sm-7">
              <td><img width="100" src="<?php echo base_url().'assets/img/people.jpg';?>"></td>
            </div>
          </div> 
          <?php else:?>
            <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Foto Sebelumnya *</label>
            <div class="col-sm-7">
              <td><img width="100" src="<?php echo base_url('assets/foto/siswa/'.$foto); ?>"></td>
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
<!-- End Modal Edit Siswa -->

<!-- Modal Hapus Siswa -->

<?php 
  foreach ($content->result_array() as $i) :
  $id           = $i['id'];
  $nis          = $i['nis'];
  $nama         = $i['nama_siswa'];
?>

<div class="modal fade" id="ModalHapus<?php echo $nis;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Hapus Guru</h3>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('admin/hapus_siswa/'.$nis);?>" method="post" enctype="multipart/form-data">
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
<!-- End Modal Hapus Siswa -->