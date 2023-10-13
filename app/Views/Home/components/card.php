<section class="box-card <?= $pt_5?>">
  <?php foreach ($product as $p): ?>
  <a href="/Detail/<?=$p['id']?>" class="card">
    <span class="disk <?= ($p['diskon_produk'] != 0) ? '' : 'd-none'?>">-<?= $p['diskon_produk']?>%</span>
    <img src="<?= base_url()?>src/assets/product/<?= $p['thumb_produk']?>" alt="product" loading="lazy" />
    <section class="card-body">
      <span class="text-light"><?= $p['kategori_produk']?></span>
      <h3><?= $p['nama_produk']?></h3>
      <section class="card-body-price">
        <span class="price <?= ($p['diskon_produk'] != 0) ? 's' : ''?>">Rp <?= number_format($p['harga_produk'],0,'.','.')?>,-</span>
        <span class="diskon <?=($p['diskon_produk'] != 0) ? '' : 'd-none'?>">Rp <?php
        $diskon = $p['diskon_produk'];
        $price = $p['harga_produk'];
        $total = $price - $price * $diskon / 100;
        echo number_format($total,0,'.','.');
        ?>,-</span>
      </section>
    </section>
  </a>
  <?php endforeach; ?>
</section>