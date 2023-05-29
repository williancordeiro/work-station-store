<div class="modal fade" id="newSale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Vender Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= URL_RAIZ . 'store' ?>" method="POST">
                    <div class="row justify-content-center ms-3 me-lg-5">
                        <div class="col-md-12">
                            <h5 class="fw-bold mt-1">Cadastrar produto:</h5>
                            <p class="fw-bold m-0">Imagem:</p>
                            <label class="home-file ms-4" for="img"><i class="bi-image-fill"></i></label>
                            <input class="visually-hidden m-0 p-0" type="file" name="file" id="img">
                        </div>
                        <div class="col-md-12">
                            <label class="fw-bold" for="name">Nome:</label>
                            <input class="form-control" type="text" name="name" id="name" autofocus>
                        </div>
                        <div class="col-md-12">
                            <label class="fw-bold" for="name">Preço:</label>
                            <input class="form-control" type="number" name="name" id="name">
                        </div>
                        <div class="col-md-12">
                            <label class="fw-bold" for="descript">Descrição:</label>
                            <input class="form-control form-control-plaintext pb-5 ps-2" type="text" name="descript" id="descript">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-warning">Publicar</button>
            </div>
        </div>
    </div>
</div>