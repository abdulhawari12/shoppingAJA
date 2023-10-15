<?= $this->extend('Home/layout/layout') ?>
<?= $this->section('main') ?>
<?= $this->include('Home/components/img-slider') ?>
<section class="detail-body">
  <span class="text-light"><?= $product['kategori_produk'] ?></span>
  <section class="detail-title">
    <h3><?= $product['nama_produk'] ?></h3>
    <span class="disk <?= ($product['diskon_produk'] != 0) ? '' : 'd-none' ?>">-<?= $product['diskon_produk'] ?>%</span>
  </section>
  <section class="detail-price">
    <span class="diskon <?= ($product['diskon_produk'] != 0) ? '' : 'd-none'; ?>">
      Rp
      <?php
      $diskon = $product['diskon_produk'];
      $harga = $product['harga_produk'];
      $total = $harga - $harga * $diskon / 100;
      echo number_format($total, 0, '.', '.');
      ?>,-
    </span>
    <span class="price <?= ($product['diskon_produk'] != 0) ? 's' : ''; ?>">Rp <?= number_format($product['harga_produk'], 0, '.', '.'); ?>,-</span>
  </section>
  <section class="detail-color">
    <h4>Colors :</h4>
    <section class="color">
      <span class="color-items <?= $product['warna_produk'] ?>"><?= $product['warna_produk'] ?></span>
    </section>
  </section>
  <section class="deskripsi">
    <h4>Descriptions :</h4>
    <p><?= $product['deskripsi_produk'] ?></p>
  </section>
  <section class="link-title">
    <h4>Produk Serupa</h4>
    <a href="/Order?sort=kategori" class="link">
      <span>Seemore</span>
      <i class="ri-lg ri-arrow-right-line"></i>
    </a>
  </section>
  <?= $this->include('Home/components/card-slider') ?>
</section>
<form action="/AddToCart" method="post">
  <?= csrf_field(); ?>
  <input type="hidden" name="product_id" value="<?= $product['id'] ?>" />
  <input type="hidden" name="users_id" value="<?= user_id() ?>" />
  <input type="hidden" name="nama" value="<?= $product['nama_produk'] ?>" />
  <input type="hidden" name="warna" value="<?= $product['warna_produk'] ?>" />
  <input type="hidden" name="harga" value="<?= $product['harga_produk'] ?>" />
  <input type="hidden" name="diskon" value="<?= $product['diskon_produk'] ?>" />
  <input type="hidden" name="kategori" value="<?= $product['kategori_produk'] ?>" />
  <input type="hidden" name="gambar" value="<?= $product['thumb_produk'] ?>" />
  <section class="stok">
    <section class="stok-title">
      <h3>Stok Tersedia : <?= $product['stok_produk'] ?></h3>
      <section class="count">
        <span id="decrement" onclick="decrement(event,this)" class="decrement"><i class="ri-lg ri-indeterminate-circle-line"></i></span>
        <input type="number" class="totalCount" name="quantity" value="<?= ($product['stok_produk'] == 0) ? $product['stok_produk'] : '1' ?>" min="<?= ($product['stok_produk'] == 0) ? $product['stok_produk'] : '1' ?>" max="<?= $product['stok_produk'] ?>" />
        <span id="increment" onclick="increment(event,this)" class="increment"><i class="ri-lg ri-add-circle-line"></i></span>
      </section>
    </section>
    <button type="submit" class="tambah-keranjang">Add To Cart</button>
  </section>
</form>
<?= $this->endsection() ?>