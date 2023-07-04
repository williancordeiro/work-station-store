<div class="mb-5">
  <div class="row justify-content-center align-items-center mb-5">
    <div class="col-md-5">
      <div class="container justify-content-sart m-3">
        <a class="btn btn-outline-primary" href="<?= URL_RAIZ . 'store' ?>"><i class="bi-arrow-left"></i> Voltar</a>
      </div>
      <div class="m-5">
        <h3 class="fw-bold text-primary text-center">Histórioco de Compras</h3>
      </div>
      <h5 class="m-1">Filtrar:</h5>
      <form method="get" class="mt-2 mb-4">
        <div class="input-group input-group-sm container mb-3">
          <label for="name" class="form-label fw-bold px-2">Nome:</label>
          <input type="text" name="name" id="productDescription" class="form-control form-control-sm me-lg-5" placeholder="Procurar por Nome">
        </div>
        <div class="input-group input-group-sm container mb-3">
          <label for="category" class="form-label fw-bold px-2">Categoria:</label>
          <select name="category" id="category" class="form-select me-lg-5">
            <?php foreach ($categorys as $category) : ?>
              <?php $selected = $this->getPost('category') == $category->getId() ? 'selected' : '------' ?>
              <option id="category" value="<?= $category->getId() ?>" <?= $selected ?>><?= $category->getName() ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="input-group input-group-sm container mb-3 row">
          <div class="col input-group input-group-sm p-0">
            <label for="priceMin" class="fw-bold px-2">Preço Minimo:</label>
            <input type="text" name="priceMin" id="priceMin" class="form-control form-control-sm">
          </div>
          <div class="col input-group input-group-sm p-0">
            <label for="maxpriceMaxPrice" class="fw-bold px-2">Preço Maximo:</label>
            <input type="text" name="priceMax" id="priceMax" class="form-control form-control-sm">
          </div>
        </div>
        <div class="text-end container mb-3">
          <button class="btn btn-outline-primary">Filtrar</button>
        </div>
      </form>
    </div>
  </div>

  <div class="container">
    <h5>Produtos Comprados:</h5>
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
        <?php foreach ($shopping as $product) : ?>
          <?php if ($product->getSale()) : ?>
            <tr class="bg-secondary bg-opacity-25">
              <td><img src="<?= URL_IMG . $product->getImage() ?>" alt="Imagem" style="max-width: 30px; height: auto;"></td>
              <td><?= $product->getName() ?></td>
              <td>R$ <?= number_format($product->getPrice(), 2, ',', '.') ?></td>
              <td><?= $product->getCategory() ?></td>
              <td class="overflow-auto" style="max-width: 13rem; max-height: 1rem;"><?= $product->getDescription() ?></td>
            </tr>
          <?php endif ?>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>