<?php
$id         = $_GET['id'];
$query      = mysqli_query($koneksi, "SELECT * FROM tabel_kbpp WHERE id='$id'");
$view       = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edi Data KB Pasca Persalinan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="update/update_kbpp.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="NIK" name='nik' value="<?php echo $view['nik'];?>">
                        <input type="text" class="form-control" placeholder="NIK" name='id' value="<?php echo $view['id'];?>" hidden>
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
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" placeholder="Umur" name='umur' value="<?php echo $view['umur'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis KB</label>
                        <select class="custom-select" id="inputGroupSelect01" name="jenis kb">
                          <option <?php echo $view['jenis_kb'];?> selected><?php echo $view['jenis_kb']; ?></option>
                          <option >IUD</option>
                          <option >Suntik</option>
                          <option >Implan</option>
                          <option >Susuk</option>
                          <option >Steril</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name='alamat' value="<?php echo $view['alamat'];?>">
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