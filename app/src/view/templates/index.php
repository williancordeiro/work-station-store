<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= URL_CSS . 'style.css' ?>">
    <title><?= APLICACAO_NOME ?></title>
</head>
<body class="bg">
    <header id="ws-navbar" class="fixed-top">
        <nav class="navbar navbar-custom border-bottom">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="#">
                    <div class="d-flex">
                        <img src="<?= URL_IMG . 'logo.png' ?>" class="img-fluid align-items-center" alt="Work Station Store">                          
                    </div>
                </a>
            </div>
        </nav>
        <div id="ws-pagination" class="pt-2 pb-2">
            <ul class="nav nav-pills nav-fill container justify-content-center">
                <li class="nav-item">
                    <a class="nav-link custom-link active" data-bs-toggle="tab" aria-current="page" href="#init">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#purchase" role="button" aria-expanded="false">Compras <i class="bi bi-caret-down-square"></i></a>
                    <ul class="dropdown-menu text-center">
                      <li><a class="dropdown-item login" href="#">Login</a></li>
                      <li><a class="dropdown-item register" href="#">Registrar-se</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" data-bs-toggle="tab" href="#store">Loja</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#sell" role="button" aria-expanded="false">Vendas <span class="bi bi-caret-down-square"></span></a>
                    <ul class="dropdown-menu text-center">
                      <li><a class="dropdown-item login" href="#">Login</a></li>
                      <li><a class="dropdown-item register" href="#">Registrar-se</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#profile" role="button" aria-expanded="false">Perfil <span class="bi bi-gear"></span></a>
                    <ul class="dropdown-menu text-center">
                      <li><a class="dropdown-item login" href="#">Login</a></li>
                      <li><a class="dropdown-item register" href="#">Registrar-se</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <?php $this->imprimirConteudo() ?>

    <div id="ws-footer">
        <footer class="bg-color py-4">
            <div class="container">
                <div class="row border-bottom">
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-end">
                    <span><i class="bi bi-geo-alt"></i></span>
                    <p class="ms-2 mb-0">Endereço fictício da empresa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Trabalhe Conosco</a></li>
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
                    <p class="text-center">&copy; 2023 Seu Site. Todos os direitos reservados.</p>
                </div>
                </div>
            </div>
        </footer>                              
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="<?= URL_JS . 'config.js' ?>"></script>
</body>
</html>