let loginForm = $(
    `
    <div id=modal-login class="modal fade" tabindex="-1" role="dialog">
      <div  class="modal-dialog modal-dialog-centered">
        <div  class="modal-content">
          <div  class="modal-header">
            <h5 class="modal-title text-center">Entrar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="text-center" action="${URL_RAIZ}" method="post">
                <div class="form-floating m-3 <?= $this->getErroCss('email') ?>">
                  <input type="email" class="form-control form-custom" id="email" autofocus placeholder="nome@exemplo.com">
                  <label for="email">Email:</label>
                </div>
                <div class="form-floating m-3 <?= $this->getErroCss('senha') ?>">
                  <input type="password" class="form-control form-custom" id="password" placeholder="nome@exemplo.com">
                  <label for="password">Senha:</label>
                </div>
            </form>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-custom btn-yellow-20 text-center">Entrar</button>
            <p> Ou <a class="link-warning" id="openRegister" href="#">Registrar-se</a></p>
            <!-- <p> Ou <button id="teste" type="button" class="btn btn-secondary register">Registrar-se</button></p> -->
          </div>
        </div>
      </div>
    </div>
    `
  );
  
  let registerForm = $(
    `
    <div id="register" class="modal fade" tabindex="-1" aria-hidden="true" aria-labelledby="registerModal">
      <div  class="modal-dialog modal-dialog-centered">
        <div  class="modal-content">
          <div  class="modal-header">
            <h5 class="modal-title text-center">Entrar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="text-center" action="${URL_RAIZ}" method="post">
                <div class="form-floating m-3">
                  <input type="text" class="form-control form-custom" id="first_name" autofocus placeholder="Nome">
                  <label for="name">Nome:</label>
                </div>
                <div class="form-floating m-3">
                  <input type="text" class="form-control form-custom" id="last_name" placeholder="Sobrenome">
                  <label for="lastName">Sobrenome:</label>
                </div>
                <div class="form-floating m-3">
                  <input type="email" class="form-control form-custom" id="email" placeholder="nome@exemplo.com">
                  <label for="email">Email:</label>
                </div>
                <div class="form-floating m-3">
                  <input type="password" class="form-control form-custom" id="password" placeholder="Senha">
                  <label for="password">Senha:</label>
                </div>
            </form>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-custom btn-yellow-20 text-center">Registrar-se</button>
            <p> Ou <a class="link-warning" id="openLogin" href="#">Entrar</a></p>
          </div>
        </div>
      </div>
    </div>
    `
  );
  
  $('.login').click(function() {
    $('body').append(loginForm);
    loginForm.modal('show');
  
    $('#openRegister').on('click', function() {
      loginForm.modal('hide');
    
      setTimeout(() => {
        registerForm.modal('show');
      }, 300);
    });
  });
  
  $('.register').click(function() {
    $('body').append(registerForm);
    registerForm.modal('show');
  
    $('#openLogin').on('click', function() {
      registerForm.modal('hide');
    
      setTimeout(() => {
        loginForm.modal('show');
      }, 500);
    });
  });