<?php 
  $page_title = 'Login';
?>

<?php include dirname(__DIR__) . '/partials/_nav.php' ?>
<main>
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                  <form action="<?php echo $base_url?>/negocio/ng_login.php" method="POST">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" type="usuario" placeholder="Usuario" />
                      <label for="inputEmail">Usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" type="pwd" placeholder="Contraseña" />
                      <label for="inputPassword">Contraseña</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                      <a class="small opacity-0" href="password.html">Forgot Password?</a>
                      <a class="btn btn-primary w-25" href="index.html">Login</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
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
</main>
<?php include dirname(__DIR__) . '/partials/_footer.php' ?>