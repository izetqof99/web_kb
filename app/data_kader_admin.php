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
        
          <br></br>
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Role</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Lokasi Penugasan</th>
                <th>Nomor Telepon</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              $query = mysqli_query($koneksi, "SELECT * FROM tbl_kader");
              while ($kdr = mysqli_fetch_array($query)) {
                $no++
              ?>
                <tr>
                  <td width="5%"><?php echo $no; ?></td>
                  <td><?php echo $kdr['role']; ?></td>
                  <td><?php echo $kdr['nama']; ?></td>
                  <td><?php echo $kdr['alamat']; ?></td>
                  <td><?php echo $kdr['lokasi_penugasan']; ?></td>
                  <td><?php echo $kdr['nomor_telepon']; ?></td>
                  <td>
                    <a onclick="hapus_kader(<?php echo $kdr['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit_kader&& id=<?php echo $kdr['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                    <a class="view_data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                    data_role="<?php echo $kdr['role'];?>"
                    data_nama="<?php echo $kdr['nama'];?>"
                    data_alamat="<?php echo $kdr['alamat'];?>"
                    data_lokasi_penugasan="<?php echo $kdr['lokasi_penugasan'];?>"
                    data_nomor_telepon="<?php echo $kdr['nomor_telepon'];?>">View Data<a>
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
      <form method="get" action="add/tambah_kader.php">
      <div class="modal-body">
        
          <div class="form-row-8">
            <div class="col">
              <input type="text" class="form-control" placeholder="Role" name="role" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
              <div class="col-13">
                <input type="text" class="form-control" placeholder="Lokasi Penugasan" name="lokasi penugasan" required>
             </div>
             <div class="col-13">
                <input type="text" class="form-control" placeholder="Nomor Telepon" name="nomor telepon" required>
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
      <form method="get" action="add/tambah_kader.php">
      <div class="modal-body" id="hasil_view_data_kader">
        
          
        
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
  function hapus_kader(data_id){
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
        window.location.href = ("delete/hapus_kader.php?id="+data_id);
      }
    });
  }
</script>