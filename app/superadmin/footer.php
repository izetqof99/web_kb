<footer class="main-footer">
  <strong>Copyright &copy; PKL-2024 <a>MYApps.build</a></strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $('.view_data').click(function(){
    var nik     = $(this).attr('data_nik');
    var nama    = $(this).attr('data_nama');
    var umur    = $(this).attr('data_umur');
    var alamat  = $(this).attr('data_alamat');
    var usia_kandungan = $(this).attr('data_usia_kandungan');
    var jumlah_anak  = $(this).attr('data_jumlah_anak');
    $.ajax({
      url:"view/view_data_ibu_hamil.php",
      dataType:"html",
      method:"POST",
      data:{nik:nik,nama:nama,umur:umur,alamat:alamat,usia_kandungan:usia_kandungan,jumlah_anak:jumlah_anak},
      success: function(data){
        $('#hasil_view_data_ibu_hamil').html(data);
      }    
    });
  
    console.log(nik)
  });
  $('.view_data').click(function(){
    var nik     = $(this).attr('data_nik');
    var nama    = $(this).attr('data_nama');
    var umur    = $(this).attr('data_umur');
    var alamat  = $(this).attr('data_alamat');
    var jenis_kb = $(this).attr('data_jenis_kb');
    $.ajax({
      url:"view/view_data_kbpp.php",
      dataType:"html",
      method:"POST",
      data:{nik:nik,nama:nama,umur:umur,alamat:alamat,jenis_kb:jenis_kb},
      success: function(data){
        $('#hasil_view_data_kbpp').html(data);
      }    
    });
  
    console.log(nik)
  });
  $('.view_data').click(function(){
    var role     = $(this).attr('data_role');
    var nama     = $(this).attr('data_nama');
    var alamat    = $(this).attr('data_alamat');
    var lokasi_penugasan    = $(this).attr('data_lokasi_penugasan');
    var nomor_telepon  = $(this).attr('data_nomor_telepon');
    $.ajax({
      url:"view/view_data_kader.php",
      dataType:"html",
      method:"POST",
      data:{role:role,nama:nama,alamat:alamat,lokasi_penugasan:lokasi_penugasan,nomor_telepon:nomor_telepon},
      success: function(data){
        $('#hasil_view_data_kader').html(data);
      }    
    });
  
    console.log(role)
  });

  $(document).ready(function(){
    setInterval(function(){
      $('#report-ib').load("banner.php");
    },2000);
  });

  $(document).ready(function(){
    setInterval(function(){
      $('#report-ib').load("banner_kbpp.php");
    },4000);
  });



  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</script>
