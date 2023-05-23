<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= URL_CSS . 'global.css' ?>">
    <link rel="stylesheet" href="<?= URL_CSS . 'home.css' ?>">
    <link rel="stylesheet" href="<?= URL_CSS . 'login.css' ?>">
    <link rel="stylesheet" href="<?= URL_CSS . 'register.css' ?>">
    <title><?= APLICACAO_NOME ?></title>
</head>
<body class="p-0">
    <?php $this->imprimirConteudo() ?>

    <div id="ws-footer">
        <footer class="global-footer py-4">
            <div class="container">
              <div class="row border-bottom">
                <div class="col-md-4">
                  <div class="d-flex align-items-end">
                    <div class="row ">
                      <div class="col-12">
                        <h5 class="fw-bold text-light text-decoration-underline text-warning-emphasis">Endereço</h5>
                      </div>
                      <div class="col-12">
                        <span class="text-secondary"><i class="bi bi-geo-alt"></i>Rua dos Trabalhadores, 21</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 class="fw-bold text-light text-decoration-underline text-warning-emphasis">Institucional</h5>
                    </div>
                    <div class="col">
                      <ul class="list-unstyled">
                        <li><a class="nav-link link-secondary" href="#">Sobre</a></li>
                        <li><a class="nav-link link-secondary" href="#">Contato</a></li>
                        <li><a class="nav-link link-secondary" href="#">Trabalhe Conosco</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <h5 class="fw-bold text-light text-decoration-underline text-warning-emphasis">Redes Sociais</h5>
                    </div>
                    <div class="col">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="link-secondary" href="#"><i class="bi bi-instagram fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><i class="bi bi-twitter fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><i class="bi bi-linkedin fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><i class="bi bi-github fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <p class="text-center">&copy; 2023 Work Station Store. Todos os direitos reservados.</p>
                </div>
              </div>
            </div>
        </footer>                              
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="<?= URL_JS . 'index.js' ?>"></script>
</body>
</html>