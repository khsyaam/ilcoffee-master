<footer class="main-footer">
    <strong>Copyright &copy; 2020 Ilcoffee Team</strong>
    Make with love.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ ('/dashboard') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ ('/dashboard') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ ('/dashboard') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ ('/dashboard') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ ('/dashboard') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ ('/dashboard') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ ('/dashboard') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ ('/dashboard') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ ('/dashboard') }}/plugins/moment/moment.min.js"></script>
<script src="{{ ('/dashboard') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ ('/dashboard') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ ('/dashboard') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ ('/dashboard') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ ('/dashboard') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ ('/dashboard') }}/dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ ('/dashboard') }}/dist/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script>


<script>
  $(document).ready(function() {
    var table = $('#example').DataTable();
    
} );
</script>
<script>
  $('.hapusbeans').click(function(){
    var produk_id = $(this).attr('produk-id');
    swal({
      title: "Kamu Yakin?",
      text: "Data Beans ini mau dihapus??",  
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/adminproduk/detail/"+produk_id+"/delete";
        swal("Selamat! Data berhasil dihapus!", {
          icon: "success",
        });
      }  
    });
  });
</script>
<script>
  $('.hapusapparel').click(function(){
    var produkap_id = $(this).attr('produkap-id');
    swal({
      title: "Kamu Yakin?",
      text: "Data Apparel ini mau dihapus??",  
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/adminprodukap/detail/"+produkap_id+"/delete";
        swal("Selamat! Data berhasil dihapus!", {
          icon: "success",
        });
      }  
    });
  });
</script>

<script>
  $('.tambah').click(function(){
      swal("Selamat!", "Data berhasil ditambahkan", "success"); 
  })
</script>
<script>
  $('.edit').click(function(){
    swal("Selamat!", "Data berhasil diubah", "success");
  })
</script>
<div class="container">
  @yield('texteditor')
</div>
