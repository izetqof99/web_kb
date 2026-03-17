<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
            Tambah Data
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-info"></i>
            Info
          </button>
          <br></br>
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Jenis KB</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              $query = mysqli_query($koneksi, "SELECT * FROM tabel_kbpp");
              while ($ib = mysqli_fetch_array($query)) {
                $no++
              ?>
                <tr>
                  <td width="5%"><?php echo $no; ?></td>
                  <td><?php echo $ib['nik']; ?></td>
                  <td><?php echo $ib['nama']; ?></td>
                  <td><?php echo $ib['umur']; ?></td>
                  <td><?php echo $ib['alamat']; ?></td>
                  <td><?php echo $ib['jenis_kb']; ?></td>
                  <td>
                    <a onclick="hapus_data(<?php echo $ib['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit_kbpp&& id=<?php echo $ib['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                    <a class="view_data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                    data_nik="<?php echo $ib['nik'];?>"
                    data_nama="<?php echo $ib['nama'];?>"
                    data_umur="<?php echo $ib['umur'];?>"
                    data_alamat="<?php echo $ib['alamat'];?>"
                    data_jenis_kb="<?php echo $ib['jenis_kb'];?>">View Data<a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
           
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</section>
<style>
  @media screen and (min-width: 1000px) {
    .modal-dialog {
      max-width: 1000px;
      /* New width for default modal */
    }
  }
</style>
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="add/tambah_kbpp.php">
      <div class="modal-body">
        
          <div class="form-row-8">
            <div class="col">
              <input type="text" maxlength="16" class="form-control" placeholder="NIK" name="nik" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Umur" name="umur" required>
            </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
              <div class="col-13">
                <select class="custom-select" id="inputGroupSelect01" name="jenis kb">
                  <option selected>Pilih</option>
                  <?php echo $view['jenis_kb'];?> selected><?php echo $view['jenis_kb']; ?>
                  <option >IUD</option>
                  <option >Suntik</option>
                  <option >Implan</option>
                  <option >Susuk</option>
                  <option >Steril</option>
                </select>
             </div>
            </div>
          </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- Modal View Data -->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="add/tambah_kbpp.php">
      <div class="modal-body" id="hasil_view_data_kbpp">
        
          
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <!--<button type="submit" class="btn btn-primary">Simpan</button>-->
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script>
  function hapus_data(data_id){
    //alert('ok');
    //window.location.href = "delete/hapus_data.php?id=" + data_id;
    Swal.fire({
      title: "Apakah Datanya akan Dihapus?",
      //showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Hapus Data",
      confirmButtonColor: "red",
      //denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location.href = "delete/hapus_kbpp.php?id=" + data_id;
      }
    });
  }
</script>