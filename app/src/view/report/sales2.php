<div class="modal fade modal-lg" id="historicSales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Histórioco de Vendas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="m-1">Filtrar:</h5>
        <form method="get" class="mt-2 mb-4">
          <div class="input-group input-group-sm container mb-3">
            <label for="name" class="form-label fw-bold px-2">Nome:</label>
            <input type="text" name="name" id="name" class="form-control form-control-sm me-lg-5" placeholder="Procurar por Nome">
          </div>
          <div class="input-group input-group-sm container mb-3">
            <label for="category" class="form-label fw-bold px-2">Categoria:</label>
            <select name="category" id="category" class="form-select me-lg-5">
                <?php foreach ($categorys as $category) : ?>
                    <?php $selected = $this->getPost('category') == $category->getId() ? 'selected' : '------' ?>
                    <option value="<?= $category->getId() ?>" <?= $selected ?> ><?= $category->getName() ?></option>
                <?php endforeach ?>
              </select>
          </div>
          <div class="input-group input-group-sm container mb-3 row">
            <div class="col input-group input-group-sm">
              <label for="minPrice" class="fw-bold px-2">Preço Minimo:</label>
              <input type="text" name="minPrice" id="minPrice" class="form-control form-control-sm me-5">
            </div>
            <div class="col input-group input-group-sm">
              <label for="maxPrice" class="fw-bold px-2">Preço Maximo:</label>
              <input type="text" name="maxPrice" id="maxPrice" class="form-control form-control-sm me-5">
            </div>
          </div>
          <div class="text-end container mb-3 me-lg-5">
            <button class="btn btn-outline-primary">Filtrar</button>
          </div>
        </form>
        <h5>Meus Produtos Vendidos:</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Imagem</th>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
              <th scope="col">Cattegoria</th>
              <th scope="col">Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($avaible as $product) : ?>
              <?php if($product->getSale()) : ?>
                <tr>
                  <td><img src="<?= URL_IMG . $product->getImage() ?>"></td>
                  <td><?= $product->getName() ?></td>
                  <td>R$ <?= number_format($product->getPrice(), 2, ',', '.') ?></td>
                  <td></td>
                  <td class="overflow-auto" style="max-width: 13rem; max-height: 2rem;"><?= $product->getDescription() ?></td>
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