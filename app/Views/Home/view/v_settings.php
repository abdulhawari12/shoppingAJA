<?= $this->extend('Home/layout/layout')?>
<?= $this->section('main')?>
<?= $this->include("Home/components/navbar") ?>
<?= $this->include("Home/components/list-items") ?>
<?= $this->include("Home/components/login_page") ?>
<?= $this->endsection() ?>