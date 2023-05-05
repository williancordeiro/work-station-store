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
                <a class="nav-link custom-link" data-bs-toggle="tab" aria-current="page" href="#init">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#purchase" role="button" aria-expanded="false">Compras <i class="bi bi-caret-down-square"></i></a>
                <ul class="dropdown-menu text-center">
                    <li><a class="dropdown-item" href="#">Minhas compras</a></li>
                    <li><a class="dropdown-item" href="#">Todas as compras</a></li>
                    <li><a class="dropdown-item" href="#">Estatisticas</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link active" data-bs-toggle="tab" href="#store">Loja</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#sell" role="button" aria-expanded="false">Vendas <span class="bi bi-caret-down-square"></span></a>
                <ul class="dropdown-menu text-center">
                    <li><a class="dropdown-item" href="#">Minhas Vendas</a></li>
                    <li><a class="dropdown-item" href="#">Todas as Vendas</a></li>
                    <li><a class="dropdown-item" href="#">Estatisticas</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link custom-link dropdown-toggle" data-bs-toggle="dropdown" href="#profile" role="button" aria-expanded="false">Perfil <span class="bi bi-gear"></span></a>
                <ul class="dropdown-menu text-center">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Mensagens</a></li>
                    <li><a class="dropdown-item" href="#">Notificações</a></li>
                    <li><a class="dropdown-item" href="#">Carrinho</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="exit" href="index.html">Sair</a></li>
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
                    <!-- <a class="btn btn-custom btn-yellow-20" aria-current="page" href="#store">Loja</a> -->
                    <button aria-current="page" data-bs-toggle="tab" data-bs-target="#store" class="btn btn-custom btn-yellow-20 position-absolute translate-middle">Ofertas</button>
                </div>
            </div>
        </div>
    </div>
    <div id="pag-store">
        <div class="tab-content">
            <div class="tab-pane show active bg-custom" id="store">
                <section class="row ms-5 me-5 mt-5">
                <div class="col-3 custom-col border bg-white">

                </div>
                <div class="col custom-col border bg-white">
                    <div class="input-group input-group-lg mt-1 mb-2 p-1 pe-3 ps-3 border-bottom">
                    <input type="search" class="form-control border-0 border-bottom custom-input" placeholder="Procurar...">
                    <button class="btn border-start border-bottom btn-custom"><i class="bi-search"></i></button>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </div>
</div>