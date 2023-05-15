<div class="container-fluid register-bg">
    <div class="row justify-content-between" id="initial">
        <section class="col-12 col-sm-6 col-md-5 register-section" id="section">
            <form id="form" action="<?= URL_RAIZ . 'register' ?>" method="post">
                <h1 class="text-center">Registrar-se</h1>

                <div class="text-center mt-3 mb-5">
                    <img class="img-fluid" src="<?= URL_IMG . 'logo.png' ?>" alt="">
                </div>

                <div class="form-floating my-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome..." required>
                    <label for="name">Nome:</label>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Sobrenome..." required>
                    <label for="lastName">Sobrenome:</label>
                </div>

                <div class="form-floating my-3">
                    <input type="text" class="form-control" name="user" id="user" placeholder="Usuário..." required>
                    <label for="user">Usuário:</label>
                </div>

                <div class="form-floating my-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email..." required>
                    <label for="email">Email:</label>
                </div>

                <div class="form-floating my-3">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Senha..." required>
                    <label for="password">Senha:</label>
                </div>
                <div class="form-floating my-3">
                    <input class="form-control" type="password" name="passwordC" id="passwordC" placeholder="Confirmar Senha..." required>
                    <label for="passwordC">Confirmar Senha:</label>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg register-btn ps-5 pe-5">Cadastre-se</button>
                </div>

                <div class="my-3">
                    <p>Já possui cadastro? <a class="link-warning" href="<?= URL_RAIZ . 'login' ?>">Fazer Login</a></p>
                </div>
            </form>
        </section>
    </div>
</div>