<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= URL_IMG . 'icon.png' ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title><?= APLICACAO_NOME ?></title>
</head>
<body>

    <header id="navbar-site" class="container-fluid bg-light shadow-sm p-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-2">
            <div class="container"> 
                <a class="navbar-brand mx-auto" href="<?= URL_RAIZ . 'store' ?>">
                <img class="img-fluid" src="<?= URL_IMG . 'logo.png' ?>" alt="">
                </a>
            </div>
        </nav>
        <div id="menuPag">
            <ul class="nav nav-pills nav-fill container p-1" id="menuWs">
                <li class="nav-item">
                    <a class="nav-link rounded-0" data-bs-toggle="tab" aria-current="page" href="#init">Inicio</a>
                </li>
                <li class="nav-item dropdown dropdown-center">
                    <a class="nav-link rounded-0 dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="#purchase">Compras</a>
                    <ul class="dropdown-menu text-center">
                        
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#historicSales"><i class="bi-clock-history"></i> Histórioco</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0 active" data-bs-toggle="tab" aria-current="page" href="#store">Loja</a>
                </li>
                <li class="nav-item dropdown dropdown-center">
                    <a class="nav-link rounded-0 dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="#sell">Vendas</a>
                    <ul class="dropdown-menu text-center">
                        <li><a class="dropdown-item" href="<?= URL_RAIZ . 'store/new' ?>"><i class="bi-plus-square"></i> Nova</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myAvailable" href="#"><i class="bi-check-square"></i> Disponíveis</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#historicSales" href="#"><i class="bi-clock-history"></i> Histórioco</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-center">
                    <a class="nav-link rounded-0 dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="#profile">Perfil</a>
                    <ul class="dropdown-menu text-center">
                        <li><p class="fw-bold">Olá, <?= $user->getName() ?></p></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myProfile" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#">Notificações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item link-danger" id="exit" href="<?= URL_RAIZ ?>">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    
    <?php $this->imprimirConteudo() ?>

    <div id="ws-footer" class="pb-0">
        <footer class="py-4 bg-primary sticky-bottom">
            <div class="container">
              <div class="row border-bottom">
                <div class="col-md-4">
                  <div class="d-flex align-items-end">
                    <div class="row ">
                      <div class="col-12">
                        <h5 class="fw-bold text-light text-decoration-underline text-warning-emphasis">Endereço</h5>
                      </div>
                      <div class="col-12">
                        <span class="text-white"><i class="bi bi-geo-alt"></i>Rua dos Trabalhadores, 21</span>
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
                        <li><a class="nav-link link-light" href="#">Sobre</a></li>
                        <li><a class="nav-link link-light" href="#">Contato</a></li>
                        <li><a class="nav-link link-light" href="#">Trabalhe Conosco</a></li>
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
                        <li class="list-inline-item"><a class="link-light" href="#"><i class="bi bi-instagram fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-light" href="#"><i class="bi bi-twitter fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-light" href="#"><i class="bi bi-linkedin fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="link-light" href="#"><i class="bi bi-github fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <p class="text-center text-white">&copy; 2023 Work Station Store. Todos os direitos reservados.</p>
                </div>
              </div>
            </div>
        </footer>                              
    </div>


    <div id="js">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>