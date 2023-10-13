<?= $this->extend("Home/layout/layout")?>
<?= $this->section("main")?>
<?= $this->include("Home/components/slider")?>
<?= $this->include('Home/components/navbar') ?>
<section class="link-title">
  <h3>Best Seller</h3>
  <a href="/Order" class="link">
    <span>Seemore</span>
    <i class="ri-lg ri-arrow-right-line"></i>
  </a>
</section>
<?= $this->include('Home/components/card') ?>
<?= $this->endsection()?>