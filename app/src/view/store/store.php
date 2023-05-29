<header id="navbar-site" class="container-fluid bg-light shadow-sm p-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-2">
        <div class="container"> 
        <a class="navbar-brand mx-auto" href="#">
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
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myCart" href="#">Carrinho</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#">Histórioco</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0 active" data-bs-toggle="tab" aria-current="page" href="#store">Loja</a>
            </li>
            <li class="nav-item dropdown dropdown-center">
                <a class="nav-link rounded-0 dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="#sell">Vendas</a>
                <ul class="dropdown-menu text-center">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#">Nova</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#">Histórioco</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-center">
                <a class="nav-link rounded-0 dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" href="#profile">Perfil</a>
                <ul class="dropdown-menu text-center">
                    <li><p class="fw-bold">Olá, <span>...</span></p></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myCart" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#" href="#">Notificações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item link-danger" id="exit" href="index.html">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<div id="main">
    <div class="tab-content">

        <div class="tab-pane" id="init">
        <div class="position-relative">
            <img class="img-fluid" src="<?= URL_IMG . 'background.png' ?>" alt="" srcset="">
            <div class="d-flex flex-column align-items-center justify-content-center position-absolute start-50 translate-middle" style="top: 75%">
            <a class="btn btn-lg p-lg-3 ps-lg-5 pe-lg-5 btn-primary rounded-1 text-xl-start fw-bolder" href="#">Ofertas</a>
            </div>
        </div>
        </div>

        <div class="tab-pane show active bg-secondary bg-opacity-25 pt-4" id="store">
            <section class="row bg-white ms-5 me-5">
                <div class="col-3 border border-primary border-opacity-50">
                    <div class="m-2 mt-3">
                        <h4 class="text-primary mb-4">Filtro:</h4>
                        <p class="fw-bold mb-0">Preço:</p>
                        <div class="mt-0 mb-5">
                            <form class="input-group input-group-sm" action="<?= URL_RAIZ . 'store' ?>" method="post">
                                <input class="form-control form-control-sm rounded-0 border-0 border-bottom border-1 border-primary shadow-none" type="number" name="minimum" id="minimum" max="100" min="1" placeholder="Mínimo">
                                <p class="fw-bold ms-2 me-2">_</p>
                                <input class="form-control form-control-sm rounded-0 shadow-none border-0 border-bottom border-1 border-primary" type="number" name="maximum" id="maximum" max="100" min="1" placeholder="Máximo">
                            </form>
                        </div>
                        <p class="fw-bold mb-0">Tipo:</p>
                        <div id="optionsType" class="input-group input-group-sm">

                        </div>


                    </div>
                </div>
                <div class="col-9 border border-primary border-opacity-50">
                    <div class="m-1 pb-2 pt-2 border-bottom">
                        <form class="input-group input-group-lg" action="<?= URL_RAIZ . 'store' ?>" method="post">
                            <input class="form-control rounded-0 border-primary shadow-none" type="text" name="" id="" placeholder="Procurar...">
                            <button class="btn btn-outline-primary rounded-0" type="submit"><i class="bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>