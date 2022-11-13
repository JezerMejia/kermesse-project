<footer class="py-4 bg-light mt-auto">
  <div class="container-fluid px-4">
    <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted">Copyright &copy; Your Website 2021</div>
      <div>
        <a href="#">Privacy Policy</a>
        &middot;
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!-- jQuery -->
<script src="<?php echo $base_url?>/js/scripts.js"></script>
<script src="<?php echo $base_url?>/js/jquery-3.6.0.min.js"></script>

<!-- Descargar el bootstrap -->
<script src="<?php echo $base_url?>/js/bootstrap.bundle.min.js"></script>

<!-- JS DATATABLES -->
<script src="<?php echo $base_url?>/js/datatables.min.js"></script>
<script src="<?php echo $base_url?>/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $base_url?>/js/responsive.dataTables.min.js"></script>
<script src="<?php echo $base_url?>/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_url?>/js/buttons.bootstrap5.min.js"></script>
<script src="<?php echo $base_url?>/js/jszip.min.js"></script>
<script src="<?php echo $base_url?>/js/pdfmake.min.js"></script>
<script src="<?php echo $base_url?>/js/vfs_fonts.js"></script>
<script src="<?php echo $base_url?>/js/buttons.html5.min.js"></script>
<script src="<?php echo $base_url?>/js/buttons.print.min.js"></script>
<script src="<?php echo $base_url?>/js/buttons.colVis.min.js"></script>

<script>
  $(document).ready(function() {
    $.extend(true, $.fn.dataTable.defaults, {
      responsive: true,
      lengthChange: false,
      searching: false,
      ordering: false,
      autoWidth: false,
      buttons: ['excel', 'pdf', 'print'],
      language: <?php echo(file_get_contents("es_mx.json")) ?>
    })

    $("#tbl_usuarios").DataTable().buttons().container().appendTo('#tbl_usuarios_wrapper .col-md-6:eq(0)');

  });
</script>
</body>

</html>