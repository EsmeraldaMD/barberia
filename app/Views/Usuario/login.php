
<div class="container">
    <div class="row">
        <div class="col">
        </br>
    <h2>Iniciar sesión</h2>
        <form action="<?=base_url('usuario/acceder'); ?>" method="POST">
        <br />
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Usuario</label>
      <input type="text" name="nombre" class="">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="pass" name="pass" >
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" value="Acceder">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>

