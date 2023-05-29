<header class="container-fluid p-2 bg-light border-bottom border-3 border-primary">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container"> 
      <a class="navbar-brand mx-auto" href="#">
        <img class="img-fluid" src="<?= URL_IMG . 'logo.png' ?>" alt="">
      </a>
    </div>
</nav>
</header>

<div class="container mb-5">
  <div class="row justify-content-center align-items-center text-center mb-5">
    <div class="col-md-5">
      <div class="m-5">
        <h3 class="fw-bold text-primary">Criar Conta</h3>
      </div>
      <form action="<?= URL_RAIZ . 'register' ?>" method="post" class="m-5">
          <div class="form-floating">
              <input type="text" id="name" name="name" class="form-control form-control-sm mb-4" placeholder="Nome..." autofocus>
              <label for="name">Nome:</label>
          </div>
          <div class="form-floating">
              <input type="email" id="email" name="email" class="form-control form-control-sm mb-4" placeholder="Email..." autofocus>
              <label for="email">Email:</label>
          </div>
          <div class="form-floating">
              <input type="password" id="password" name="password" class="form-control form-control-sm mb-4" placeholder="Senha..." autofocus>
              <label for="password">Senha:</label>
          </div>
          <div class="">
              <button type="submit" class="btn btn-lg btn-primary w-100 mb-1 rounded-1">Cadastrar-se <i class="bi-check-square"></i></button>
          </div>
      </form>
      <div class="mb-5">
        <p>Já possui cadastro? <a class="text-primary fw-bold text-uppercase" href="<?= URL_RAIZ . 'login' ?>">Entrar</a></p>
      </div>
    </div>
  </div>
</div>