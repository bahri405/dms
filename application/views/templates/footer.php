

        <!-- /.card-footer-->
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" >
    <div class="float-right d-none d-sm-block">
      
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
<script src="<?= base_url('assets/vendor/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/vendor/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor/'); ?>dist/js/adminlte.min.js"></script>


<!-- DataTables  & Plugins -->
<!-- <script src="<?= base_url('assets/vendor/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->


<!-- datatable 2 -->
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

<script>
  new DataTable('#example');
</script>

<!-- <script>
  $(document).ready(function(){
    $('#example').DataTable();
  });
</script> -->

<!-- data dables -->
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->

<!-- form gambar -->
  <script>
      $('.costom-file-input').on('change', function(){
          let fileName = $this.val().split('\\').pop();
          $($this).next('custom-file-label').addClasss('selected').html(fileName);
      });
  </script>
  

</body>
</html>
