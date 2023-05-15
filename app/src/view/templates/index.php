<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
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
                <div class="col-md-4 text-center">
                  <div class="d-flex align-items-end">
                    <span><i class="bi bi-geo-alt"></i></span>
                    <p class="ms-2 mb-0">Rua dos Trabalhadores, 21</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <ul class="list-unstyled">
                    <li><a class="nav-link link-secondary" href="#">Sobre</a></li>
                    <li><a class="nav-link link-secondary" href="#">Contato</a></li>
                    <li><a class="nav-link link-secondary" href="#">Trabalhe Conosco</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="bi bi-github"></i></a></li>
                  </ul>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script class="visually-hidden">
        const URL_RAIZ = <?= URL_RAIZ ?>
    </script>
    <script src="<?= URL_JS . 'index.js' ?>"></script>
</body>
</html>