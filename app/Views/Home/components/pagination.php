<?php
use CodeIgniter\Pager\PagerRenderer;
$pager->setSurroundCount(2); ?>
<section class="paginate">
  <?php if ($pager->hasPreviousPage()) : ?>
  <a href="<?= $pager->getPreviousPage() ?>" class="previous">
    <i class="ri-lg ri-arrow-left-circle-line"></i>
  </a>
  <?php endif ?>
  <?php foreach ($pager->links() as $link) : ?>
  <a href="<?= $link['uri'] ?>" class="items  <?= $link['active'] ? 'active' :
    '' ?> <?= $pager->hasNextPage() ? 'rounded-left' : ''?> <?=
    $pager->hasPreviousPage() ? 'rounded-right' : ''?>"><?= $link['title'] ?></a>
  <?php endforeach ?>
  <?php if ($pager->hasNextPage()) : ?>
  <a href="<?= $pager->getNextPage() ?>" class="next">
    <i class="ri-lg ri-arrow-right-circle-line"></i>
  </a>
  <?php endif ?>
</section>