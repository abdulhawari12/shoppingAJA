<?= $this->extend('Wallet/layout/layout') ?>
<?= $this->section('main') ?>
<?= $this->include('Wallet/components/filter')?>
<section class="box">
  <section class="box-wallet">
    <h3>Rp
      <?= ($wallet == []) ? '0' : '' ?>
      <?php foreach ($wallet as $wallets) : ?>
        <?= number_format($wallets['saldo'], 0, '.', '.') ?>
        <?php endforeach; ?>,-
        <i class="ri-lg ri-eye-line"></i>
    </h3>
  </section>
  <section class="box-wallet-riwayat">
    <span class="dots"></span>
    <section class="box-wallet-riwayat-title">
      <h4>Riwayat Transaksi</h4>
      <button type="button"><i class="ri-lg ri-filter-3-line"></i> Filter</button>
    </section>
    <section class="box-wallet-riwayat-items">
      <?php foreach ($transaksi as $t): ?>
      <section class="riwayat-items">
        <section class="riwayat-items-title">
          <span class="title"><?= $t['nama_transaksi']?></span>
          <span class="date"><?= date('d M Y', strtotime($t['tgl_transaksi']))?></span>
        </section>
        <?php if($t['saldo_masuk'] != 0) : ?>
        <span class="price s">Rp +<?=number_format( $t['saldo_masuk'],0,'.','.')?>,-</span>
        <?php endif;?>
        <?php if($t['saldo_keluar'] != 0) : ?>
        <span class="price d">Rp -<?= number_format($t['saldo_keluar'],0,'.','.')?>,-</span>
        <?php endif;?>
      </section>
      <?php endforeach; ?>
    </section>
  </section>
  <section class="box-wallet-form">
    <a href="/TambahSaldo" class="wallet-btn">
      <i class="ri-lg ri-wallet-line"></i>
      Tambah Saldo
    </a>
    <a href="#" class="wallet-btn">
      <i class="ri-lg ri-hand-coin-line"></i>
      Transfer Saldo
    </a>
  </section>
</section>
<?= $this->endsection() ?>