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
                            <form class="input-group input-group-sm" action="index2.html" method="post">
                                <input class="form-control form-control-sm rounded-0 border-0 border-bottom border-1 border-primary shadow-none" type="number" name="minimum" id="minimum" max="100" min="1" placeholder="Mínimo">
                                <p class="fw-bold ms-2 me-2">_</p>
                                <input class="form-control form-control-sm rounded-0 shadow-none border-0 border-bottom border-1 border-primary" type="number" name="maximum" id="maximum" max="100" min="1" placeholder="Máximo">
                            </form>
                        </div>
                        <p class="fw-bold mb-0">Categoria:</p>
                        <div id="optionsType" class="input-group input-group-sm mt-1 ms-2">
                            <input type="checkbox" name="type1" id="type1" class="form-check-inline">
                            <label for="type1">Elétricas</label>
                        </div>
                        <div id="optionsType" class="input-group input-group-sm mt-1 ms-2">
                            <input type="checkbox" name="type2" id="type2" class="form-check-inline">
                            <label for="type2">Manuais</label>
                        </div>
                        <div id="optionsType" class="input-group input-group-sm mt-1 ms-2">
                            <input type="checkbox" name="type3" id="type3" class="form-check-inline">
                            <label for="type3">Medição</label>
                        </div>
                        <div id="optionsType" class="input-group input-group-sm mt-1 ms-2">
                            <input type="checkbox" name="type4" id="type4" class="form-check-inline">
                            <label for="type4">Acessórios</label>
                        </div>


                    </div>
                </div>
                <div class="col-9 border border-primary border-opacity-50">
                    <div class="m-1 pb-2 pt-2 border-bottom">
                        <form class="input-group input-group-lg" method="get">
                            <input class="form-control rounded-0 border-primary shadow-none" type="text" name="" id="" placeholder="Procurar...">
                            <button class="btn btn-outline-primary rounded-0" type="submit"><i class="bi-search"></i></button>
                        </form>
                    </div>
                    <div class="mt-1 row bm-lg-5">
                        <form class="mt-1 row bm-lg-5 m-0" action="<?= URL_RAIZ . 'store' ?>" method="post">
                            <?php foreach ($products as $product) : ?>
                                <?php if (!$product->getSale()) : ?>
                                    <div class="col-4 mb-2">
                                        <div class="card" style="width: 18rem;">
                                            <img src="<?= URL_IMG . $product->getImage() ?>" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h4 id="productName" class="card-title fw-bold"><?= $product->getName() ?></h4>
                                                    <p class="fw-bold m-0">Preço: <p class="m-0 fw-bold text-primary"> R$ <?= number_format($product->getPrice(), 2, ',', '.') ?></p></p>
                                                    <p>Categoria: <?= $product->getCategory() ?></p>
                                                <p class="card-text" style="max-height: 3em; overflow: auto;">
                                                    <?= $product->getDescription() ?>
                                                </p>
                                                <input type="hidden" name="productId" id="productId" value="<?= $product->getId() ?>">
                                                <button type="submit" class="btn btn-primary w-100">Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </form>        
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

<?php include PASTA_VISAO . 'sale/new2.php' ?>

<?php include PASTA_VISAO . 'report/purchases.php' ?>
<?php include PASTA_VISAO . 'report/sales.php' ?>

<?php include PASTA_VISAO . 'sale/available.php' ?>