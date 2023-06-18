<div class="modal fade" id="newSale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Vender Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL_RAIZ . 'store' ?>" method="post" class="m-5">
                    <div class="input-group mb-3">
                        <label for="image" class="form-label me-2 fw-bold">Imagem:</label>
                        <input class="form-control" type="file" name="image" id="image">
                        <!--<label for="image" class="form-label text-lg-start"><i class="bi-image-fill h1"></i></label>
                        <input type="file" name="image" id="img" class="visually-hidden">-->
                    </div>
                    <div class="input-group mb-3">
                        <label for="name" class="form-label me-2 fw-bold">Nome:</label>
                        <input type="text" name="name_product" id="name" class="form-control" autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <label for="preco" class="form-label me-2 fw-bold">Preço:</label>
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco" id="preco" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <label for="category" class="form-label me-2 fw-bold">Categoria:</label>
                        <select name="category" class="form-select">
                            <option selected>---</option>
                            <option value="1">Elétricas</option>
                            <option value="2">Manuais</option>
                            <option value="3">Medição</option>
                            <option value="4">Acessórios</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="description" class="form-label me-2 fw-bold">Descrição:</label>
                        <input type="text" name="description" id="description" class="form-control pb-lg-5">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary ms-3">Publicar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>