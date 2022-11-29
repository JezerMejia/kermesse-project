<?php
$alert_msj = $_SESSION["alert_msj"] ?? null;
?>

<?php if ($alert_msj != null): ?>
<div id="alert_message" class="alert <?php echo $alert_msj->type; ?> fade hide position-fixed bottom-0 start-50 translate-middle" role="alert">
  <?php echo $alert_msj->message; ?>
</div>
<?php endif ?>

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

<?php if ($alert_msj != null): ?>
    const alertMessage = $("#alert_message").removeClass("hide").addClass("show")

    setTimeout(() => {
      alertMessage.removeClass("show").addClass("hide");
    }, 5000);
<?php endif ?>

  });
</script>
</body>

<?php
$_SESSION["alert_msj"] = null;
?>

</html>
