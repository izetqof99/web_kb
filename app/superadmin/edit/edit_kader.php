<?php
$id         = $_GET['id'];
$query      = mysqli_query($koneksi, "SELECT * FROM tbl_kader WHERE id='$id'");
$view       = mysqli_fetch_array($query);
?>
<section class="content">
  <div class="container-fluid">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Kader</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="post" action="update/update_kader.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Role</label>
                <input type="text" class="form-control" placeholder="Role" name='role' value="<?php echo $view['role'];?>">
                <input type="text" class="form-control" placeholder="Role" name='id' value="<?php echo $view['id'];?>" hidden>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Lokasi Penugasan</label>
                <input type="text" class="form-control" placeholder="Lokasi Penugasan" name='lokasi_penugasan' value="<?php echo $view['lokasi_penugasan'];?>">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" placeholder="Alamat" name='alamat' value="<?php echo $view['alamat'];?>">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Nomor Telepon" name='nomor_telepon' value="<?php echo $view['nomor_telepon'];?>">
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="customFile">Upload Foto</label>
            <input type="file" name='foto' class="form-control" id="customFile" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <img src="foto/<?php echo $view['foto']; ?>" width="480px" class="rounded float-right">
          </div>
        </div>
        <div class="row">
          <button type="submit" class="btn  btn-primary">Simpan</button>
        </div>



      </form>
    </div>
    <!-- /.card-body -->
  </div>
</div>
</section>