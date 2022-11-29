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
                      <input class="form-control" id="inputUsername" name="usuario" placeholder="Usuario" />
                      <label for="inputUsername">Usuario</label>
                      <div class="invalid-feedback">
                        Por favor ingresa un nombre de usuario.
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" name="pwd" type="password" placeholder="Contraseña" />
                      <label for="inputPassword">Contraseña</label>
                      <div id="inputPasswordFeedback" class="invalid-feedback">
                        Por favor ingresa una contraseña.
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                      <a class="small opacity-0">Forgot Password?</a>
                      <button class="btn btn-primary w-25" type="submit">Login</a>
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

<script>
const query = location.search;

const errMatch = query.match(/error=(\d+)/);
const userMatch = query.match(/username=(.+)$/);

let error = 0;
let username = "";

if (errMatch) {
  error = parseInt(errMatch[1]);
}
if (userMatch) {
  username = userMatch[1];
}

const userInput = document.querySelector("#inputUsername");
const pwdInput = document.querySelector("#inputPassword");
const feedbackPwd = document.querySelector("#inputPasswordFeedback");

switch (error) {
  case 1: // All empty
    userInput.classList.add("is-invalid");
    pwdInput.classList.add("is-invalid");
    break;
  case 2: // User only
    userInput.value = username;
    pwdInput.classList.add("is-invalid");
    break;
  case 3: // Invalid
    userInput.value = username;
    feedbackPwd.innerText = "Contraseña incorrecta";
    pwdInput.classList.add("is-invalid");
}
</script>
