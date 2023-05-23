<?php include PASTA_VISAO . '/sale/new.php' ?>

<header class="">
    <nav class="navbar global-navbar border-bottom p-3">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">
                <div class="d-flex">
                    <img src="<?= URL_IMG . 'logo.png' ?>" class="img-fluid align-items-center" alt="Work Station Store">                          
                </div>
            </a>
        </div>
    </nav>
    <div id="ws-pagination" class="global-pills pt-2 pb-2">
        <ul class="nav nav-pills nav-fill container justify-content-center">
            <li class="nav-item">
                <a class="nav-link global-link" data-bs-toggle="tab" aria-current="page" href="#init">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link global-link dropdown-toggle" data-bs-toggle="dropdown" href="#purchase" role="button" aria-expanded="false">Compras <i class="bi bi-caret-down-square"></i></a>
                <ul class="dropdown-menu text-center">
                    <li><a class="dropdown-item" href="#">Carinho</a></li>
                    <li><a class="dropdown-item" href="#">Todas as compras</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link global-link active" data-bs-toggle="tab" href="#store">Loja</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link global-link dropdown-toggle" data-bs-toggle="dropdown" href="#sell" role="button" aria-expanded="false">Vendas <span class="bi bi-caret-down-square"></span></a>
                <ul class="dropdown-menu text-center">
                    <li><a data-bs-toggle="modal" data-bs-target="#newSale" class="dropdown-item" href="#">Nova</a></li>
                    <li><a class="dropdown-item" href="#">Disponíveis</a></li>
                    <li><a class="dropdown-item" href="#">Todas as vendas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link global-link dropdown-toggle" data-bs-toggle="dropdown" href="#profile" role="button" aria-expanded="false">Perfil <span class="bi bi-gear"></span></a>
                <ul class="dropdown-menu text-center">
                    <li><strong class="dropdown-item">Olá, <?= $this->getUser() ?></strong></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Notificações</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="exit" href="<?= URL_RAIZ ?>">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<div id="main">
    <div id="pag-init">
        <div class="tab-content">
            <div class="tab-pane show position-relative" id="init">
                <div class="">
                    <img class="img-fluid" src="<?= URL_IMG . 'background.png' ?>" alt="">
                </div>
                <div class="text-center">
                    <button aria-current="page" data-bs-toggle="tab" data-bs-target="#store" class="btn global-btn home-btn position-absolute translate-middle">Ofertas</button>
                </div>
            </div>
        </div>
    </div>
    <div id="pag-store">
        <div class="tab-content">
            <div class="tab-pane show active home-bg pt-5" id="store">
                <section class="row ms-5 me-5">
                <div class="col-3 home-col border border-warning bg-white">
                      <h4 class="pt-3 ps-2 text-warning fw-bold"><i class="bi-sliders"></i> Filtrar por:</h4>
                      <p class="ms-4 mt-5 fw-bold">Preço:</p>
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm ms-4 me-2" placeholder="Mínimo">
                        <h4>_</h4>
                        <input type="text" class="form-control form-control-sm me-4 ms-2" placeholder="Máximo">
                      </div>
                      <p class="ms-4 mt-5 fw-bold">Tipo:</p>
                      <div class="input-group input-group-lg ms-4">
                        <input class="form-check form-check-inline" type="checkbox" name="opt1" id="opt1">
                        <label for="opt1">Broca</label>
                      </div>
                      <div class="input-group input-group-lg ms-4">
                        <input class="form-check form-check-inline" type="checkbox" name="opt1" id="opt1">
                        <label for="opt1">Chave de fenda</label>
                      </div>
                      <div class="input-group input-group-lg ms-4">
                        <input class="form-check form-check-inline" type="checkbox" name="opt1" id="opt1">
                        <label for="opt1">Martelo</label>
                      </div>
                      <div class="input-group input-group-lg ms-4">
                        <input class="form-check form-check-inline" type="checkbox" name="opt1" id="opt1">
                        <label for="opt1">Parafuso</label>
                      </div>
                    </div>
                    <div class="col home-col border border-warning bg-white">
                        <div class="input-group input-group-lg mt-1 mb-2 p-1 pe-3 ps-3 border-bottom">
                        <input type="search" class="form-control" placeholder="Procurar...">
                        <button class="btn"><i class="bi-search"></i></button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>