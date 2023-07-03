<div class="container mb-5">
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-md-5">
            <div class="container justify-content-sart m-3">
                <a class="btn btn-outline-primary" href="<?= URL_RAIZ . 'store' ?>" ><i class="bi-arrow-left"></i> Voltar</a>
            </div>
        <div class="m-5">
            <h3 class="fw-bold text-primary text-center">Cadastrar produto:</h3>
        </div>
            <form action="<?= URL_RAIZ . 'store/new' ?>" method="post" class="m-5" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <label for="" class="form-label me-2 fw-bold">Nome:</label>
                    <input type="text" name="name" id="name" class="form-control" autofocus>
                </div>
                <div class="input-group mb-3">
                    <label for="price" class="form-label me-2 fw-bold">Preço:</label>
                    <span class="input-group-text">R$</span>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <label for="description" class="form-label me-2 fw-bold">Descrição:</label>
                    <textarea type="text" name="description" id="description" class="form-control pb-lg-5" rows="2"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="category" class="form-label me-2 fw-bold">Categoria:</label>
                    <select name="category" id="category" class="form-select">
                        <?php foreach ($categorys as $category) : ?>
                            <?php $selected = $this->getPost('category') == $category->getId() ? 'selected' : '------' ?>
                            <option value="<?= $category->getId() ?>" <?= $selected ?> ><?= $category->getName() ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="image" class="form-label me-2 fw-bold">Imagem:</label>
                    <input class="form-control" type="file" name="image" id="image">
                    <!--<label for="image" class="form-label text-lg-start"><i class="bi-image-fill h1"></i></label>
                    <input type="file" name="image" id="img" class="visually-hidden">-->
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary ms-3">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>