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
<script src="js/scripts.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>

<!-- Descargar el bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- JS DATATABLES -->
<script src="js/datatables.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/responsive.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.bootstrap5.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.colVis.min.js"></script>

<script>
  $(document).ready(function() {
    $.extend(true, $.fn.dataTable.defaults, {
      responsive: true,
      lengthChange: true,
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