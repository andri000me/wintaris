<div class="box">
<div class="box-body">
<?php
foreach ($content->result_array() as $i) :
  $id   = $i['pinjaman_id'];
  $tgl  = date('d-m-Y', strtotime($i['pinjaman_tgl_masuk']));
?>
      <form class="form-horizontal" action="<?php echo base_url('pinjaman/edit/'.$id); ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group">
            <label for="" class="col-sm-3">Nama Barang *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nm_barang" placeholder="Nama Barang" value="<?php echo $i['pinjaman_nama'];?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3">Jumlah Barang *</label>
            <div class="col-sm-7">
              <input type="number" class="form-control" name="jml_barang" value="<?php echo $i['pinjaman_jml'];?>" placeholder="Jumlah Barang" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3">Tanggal Masuk *</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" name="tgl_pakai" id="datepicker1" value="<?php echo $tgl;?>" placeholder="Tanggal Masuk Barang" required>
            </div>  
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3">Pemberi Pinjaman *</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="pemberi_pinjaman" value="<?php echo $i['pinjaman_pemberi'];?>" placeholder="Pemberi Pinjaman" required>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3">Deskripsi *</label>
            <div class="col-sm-7">
              <textarea name="deskripsi" class="form-control" placeholder="Deskripsi pembagian pamakaian barang"><?php echo $i['pinjaman_deskripsi'];?></textarea>
            </div>
          </div>

        </div>
        <div class="form-group">
          <div class="col-md-12">
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="history.go(-1);"><span class="glyphicon glyphicon-remove-sign"></span> Back</button>
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
          </div>
        </div>
      </form>
<?php endforeach; ?>
</div>
</div>