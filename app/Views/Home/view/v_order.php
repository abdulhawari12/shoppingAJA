<?= $this->extend('Home/layout/layout')?>
<?= $this->section('main')?>
<span class="data-page-url" data-page="<?= $pageUrl?>"></span>
<span class="data-search" data-search="<?= $search?>"></span>
<?= $this->include("Home/components/navbar") ?>
<?= $this->include("Home/components/search") ?>
<?= $this->include("Home/components/card") ?>
<?php if($product === []) : ?>
 <?= $this->include('Home/components/not-found')?>
 <?php endif?>
 <?= $pager->links('product', 'custom_pagination') ?>
<?= $this->endsection() ?>