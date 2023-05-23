<div class="container-fluid login-bg m-auto">
    <div class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-5 mt-5 mb-5">
            <form class="login" action="<?= URL_RAIZ . 'login' ?>" method="post">
                <h1 class="text-center">Entrar</h1>

                <div class="text-center mt-3 mb-5">
                    <img class="img-fluid" src="<?= URL_IMG . 'logo.png' ?>" alt="">
                </div>

                <div class="form-floating my-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                    <label for="email">Email:</label>
                </div>

                <div class="form-floating my-3">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Senha...">
                    <label for="password">Senha:</label>
                </div>
                
                <div class="text-center">
                    <button class="btn btn-lg pe-5 ps-5 global-btn">Entrar</button>
                </div>

                <div class="my-3">
                    <p>Ainda não possuí cadastro? <a class="link-warning" href="<?= URL_RAIZ . 'register/create' ?>">Registrar-se</a></p>
                </div>
            </form>
        </section>
    </div>
</div>