<div class="modal fade modal-lg" id="myAvailable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Meus Produtos</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>Meus Produtos Publicados:</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Imagem</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($available as $product) : ?>
                  <?php if (!$product->getSale()) : ?>
                    <tr>
                      <td><img src="<?= URL_IMG . $product->getImage() ?>" alt="Imagem" style="max-width: 30px; height: auto;"></td>
                      <td><?= $product->getName() ?></td>
                      <td>R$ <?= number_format($product->getPrice(), 2, ',', '.') ?></td>
                      <td><?= $product->getCategory() ?></td>
                      <td class="overflow-auto" style="max-width: 13rem; max-height: 1rem;"><?= $product->getDescription() ?></td>
                      <td>
                        <button class="btn btn-outline-danger"><i class="bi-trash"></i></button>
                        <button class="btn btn-outline-primary"><i class="bi-pencil"></i></button>
                      </td>
                    </tr>
                  <?php endif ?>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
    </div>
</div>