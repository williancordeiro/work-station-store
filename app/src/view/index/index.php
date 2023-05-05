<header id="ws-navbar" class="mb-5 fixed-top">
    <nav class="navbar navbar-custom border-bottom">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">
                <div class="d-flex">
                    <img src="<?= URL_IMG . 'logo.png' ?>" class="img-fluid align-items-center" alt="Work Station Store">                          
                </div>
            </a>
        </div>
    </nav>
    <div id="ws-pagination" class="custom-pagination pt-2 pb-2">
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

<div id="main">
    <div id="pag-init">
        <div class="tab-content">
            <div class="tab-pane show active position-relative" id="init">
                <div class="">
                    <img class="img-fluid" src="<?= URL_IMG . 'background.png' ?>" alt="">
                </div>
                <div class="text-center">
                    <button type="button" id="login" class="btn btn-custom btn-yellow-20 position-absolute translate-middle login">Ofertas</button>
                </div>
            </div>
        </div>
    </div>
    <div id="pag-store">
        <div class="tab-content">
            <div class="tab-pane show bg-custom position-relative" id="store">
                <section class="container bg-blur">
                <img class="img-fluid" src="<?= URL_IMG . 'background.png' ?>" alt="">
                </section>
                <div id="btns-register" class="container">
                    <button type="button" id="login" class="btn col-3 btn-custom btn-yellow-20 position-absolute m-3 login">Entrar</button>
                    <button type="button" id="register" class="btn col-3 btn-custom btn-yellow-20 position-absolute m-3 register">Registrar-se</button>
                </div>
            </div>
        </div>
    </div>
</div>