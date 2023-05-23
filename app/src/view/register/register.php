<div class="container-fluid register-bg">
    <div class="row justify-content-between" id="initial">
        <section class="col-12 col-sm-6 col-md-5 register-section" id="section">
            <form id="form" action="<?= URL_RAIZ . 'register' ?>" method="post">
                <h1 class="text-center">Registrar-se</h1>

                <div class="text-center mt-3 mb-5">
                    <img class="img-fluid" src="<?= URL_IMG . 'logo.png' ?>" alt="">
                </div>

                <div class="form-floating mt-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome..." required autofocus>
                    <label for="name">Nome:</label>
                </div>

                <div class="form-floating mt-4">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email..." required>
                    <label for="email">Email:</label>
                </div>

                <div class="form-floating mt-4">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Senha..." required>
                    <label for="password">Senha:</label>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-lg global-btn ps-5 pe-5">Cadastre-se</button>
                </div>

                <div class="my-3">
                    <p>Já possui cadastro? <a class="link-warning" href="<?= URL_RAIZ . 'login' ?>">Fazer Login</a></p>
                </div>
            </form>
        </section>
    </div>
</div>