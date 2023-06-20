<?php if ($this->temErro($campo)): ?>
    <span class="text-danger"><?= $this->getErro($campo) ?></span>
<?php endif ?>