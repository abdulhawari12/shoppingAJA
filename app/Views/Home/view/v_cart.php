<?= $this->extend('Home/layout/layout')?>
<?= $this->section('main')?>
  <section class="box-cart">
    <?php if(logged_in() && $cart !== [] && $countCart > 1):?>
    <section class="box-deleted-all">
        <button type="button" class="deleted-all">
          Hapus Semua
        </button>
        <section class="id-cart" data-id="<?= user_id()?>"></section>
        </section>
    <?php endif;?>
    <?php foreach ($cart as $c): ?>
    <section class="cart-items">
      <span class="disk <?= ($c['diskon_produk'] == 0) ? 'd-none' : ''?>">-<?= $c['diskon_produk']?>%</span>
      <img src="<?= base_url()?>src/assets/product/<?= $c['thumb_produk']?>" alt="<?= $c['nama_produk']?>" loading="lazy" />
      <section class="cart-items-body">
        <h3><?= $c['nama_produk']?></h3>
        <section class="cart-items-body-price">
          <span>Rp <?php 
          $diskon = $c['diskon_produk'];
          $harga = $c['harga_produk'];
          $total = $harga - $harga * $diskon / 100;
          echo number_format($total,0,'.','.')?></span>
          <span>Qty: <?= $c['quantity']?></span>
          <span class="price">Total: Rp <?php
           $diskon = $c['diskon_produk'];
           $harga = $c['harga_produk'];
           $jumlah = $c['quantity'];
           $hargaAsli = $harga - $harga * $diskon / 100;
           $total = $hargaAsli * $jumlah;
           echo number_format($total,0,'.','.');
          ?>,-</span>
        </section>
      </section>
    <form action="/Cart/Delete/<?= $c['cart_id']?>" method="post">
        <?= csrf_field()?>
        <input type="hidden" value="DELETE" name="_method"/>
        <button type="submit" class="cart-items-action">
          <i class="ri-lg ri-delete-bin-2-fill"></i>
        </button>
      </form>
    </section>
    <?php endforeach; ?>
    <?php if($cart === [] && logged_in()) : ?>
  <?= $this->include('Home/components/not-found')?>
    <?php endif?>
  <?= $this->include('Home/components/login_page')?>
  </section>
  <section class="link-title">
     <h4>Produk Lainnya</h4>
     <a href="/Order" class="link">
       <span>Seemore</span>
       <i class="ri-lg ri-arrow-right-line"></i>
     </a>
   </section>
  <?= $this->include('Home/components/card-slider')?>
  <?php if(logged_in()):?>
  <form class="form-checkout" action="/Pesanan" method="post">
    <?= csrf_field()?>
    <?php foreach ($cart as $c): ?>
    <input type="hidden" name="nama[]" value="<?= $c['nama_produk']?>" />
    <input type="hidden" name="gambar[]" value="<?= $c['thumb_produk']?>" />
    <input type="hidden" name="kategori[]" value="<?= $c['kategori_produk']?>" />
    <input type="hidden" name="diskon[]" value="<?= $c['diskon_produk']?>" />
    <input type="hidden" name="warna[]" value="<?= $c['warna_produk']?>" />
    <input type="hidden" name="jumlah[]" value="<?= $c['quantity']?>" />
    <input type="hidden" name="product_id[]" value="<?= $c['product_id']?>" />
    <input type="hidden" name="users_id[]" value="<?= user_id()?>" />
      <input type="hidden" name="hargaAsli[]" value="<?=$c['harga_produk']?>" />
    <?php endforeach; ?>
    <section class="form-checkout-total">
      <h3>Total Harga:</h3>
      <h4>Rp <?php
       $total = 0;
        // dd($cart->harga_produk);
       foreach ($cart as $c){
         $diskon = $c['diskon_produk'];
         $harga = $c['harga_produk'];
         $jumlah = $c['quantity'];
         $totals = $harga - $harga * $diskon / 100;
         $hargaAsli = $totals * $jumlah;
         $total += $hargaAsli;
        // dd($harga);
       }
       echo number_format($total,0,'.','.');
      ?>,-</h4>
      <input type="hidden" name="harga[]" value="<?= $total?>" />
    </section>
    <button type="submit">Pesan Sekarang</button>
  </form>
  <?php endif;?>
<?= $this->endsection()?>