<?php if(logged_in()) : ?>
<section class="box-list-profile">
  <section class="list-profile">
    <img src="<?= base_url('src/assets/profile/' . user()->profile)?>" alt="Admin" loading="lazy" />
    <section class="list-profile-title">
      <h1><?= user()->username?></h1>
      <span><?= user()->email?></span>
    </section>
  </section>
  <section class="box-list-amount">
    <section class="list-amount">
      <a href="/Saldo" class="list-amount-items">
        <i class="ri-lg ri-currency-fill"></i>
        <h4>Saldo</h4>
        <?php if($wallet == []) :?>
        <span>Rp 0,-</span>
        <?php endif;?>
        <span><?php foreach($wallet as $w) :?>
       Rp <?= number_format($w['saldo'],0,'.','.')?>,-
        <?php endforeach;?></span>
      </a>
      <a href="#" class="list-amount-items">
        <i class="ri-lg ri-truck-fill"></i>
        <h4>Status</h4>
        <span>Pending</span>
      </a>
      <a href="#" class="list-amount-items">
        <i class="ri-lg ri-refund-2-fill"></i>
        <h4>Refund</h4>
        <span>Rp 1.000,-</span>
      </a>
      <a href="#" class="list-amount-items">
        <i class="ri-lg ri-coupon-fill"></i>
        <h4>Voucher</h4>
        <span>2 Vourcher</span>
      </a>
    </section>
    <section class="list-amount">
      
      <?php if($wallet == []) :?>
      <a href="#" class="list-amount-up-down">
        <span class="up"><i class="ri-lg ri-arrow-up-line"></i></span>
        <section class="list-amount-up-down-title">
          <span>Uang Masuk</span>
          <h5>
            Rp 0
          </h5>
        </section>
      </a>
      <a href="#" class="list-amount-up-down">
        <span class="down"><i class="ri-lg ri-arrow-down-line"></i></span>
        <section class="list-amount-up-down-title">
          <span>Uang Keluar</span>
          <h5>
            Rp 0
          </h5>
        </section>
      </a>
      <?php endif; ?>
      <?php foreach ($wallet as $w): ?>
      <a href="#" class="list-amount-up-down">
        <span class="up"><i class="ri-lg ri-arrow-up-line"></i></span>
        <section class="list-amount-up-down-title">
          <span>Uang Masuk</span>
          <h5>
            Rp <?= number_format($w['saldo_masuk'],0,'.','.')?>
          </h5>
        </section>
      </a>
      <a href="#" class="list-amount-up-down">
        <span class="down"><i class="ri-lg ri-arrow-down-line"></i></span>
        <section class="list-amount-up-down-title">
          <span>Uang Keluar</span>
          <h5>
            Rp <?= number_format($w['saldo_keluar'],0,'.','.')?>
          </h5>
        </section>
      </a>
      <?php endforeach; ?>
    </section>
  </section>
  <section class="box-list-settings">
    <a href="/EditProfile" class="list-items-settings">
      <i class="ri-lg ri-user-fill icons"></i>
      <h4>Pengaturan Profil</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
    <a href="#" class="list-items-settings">
      <i class="ri-lg ri-shield-check-fill icons"></i>
      <h4>Pengaturan Keamanan</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
    <a href="#" class="list-items-settings">
      <i class="ri-lg ri-shield-user-fill icons"></i>
      <h4>Verifikasi</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
  </section>
  <section class="box-list-settings">
    <a href="#" class="list-items-settings">
      <i class="ri-lg ri-question-fill icons"></i>
      <h4>Pusan Bantuan</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
    <a href="#" class="list-items-settings">
      <i class="ri-lg ri-file-list-fill icons"></i>
      <h4>Syarat & Ketentuan</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
    <a href="#" class="list-items-settings">
      <i class="ri-lg ri-information-fill icons"></i>
      <h4>Kebijakan Privasi</h4>
      <i class="ri-lg ri-arrow-right-s-line icons-right"></i>
    </a>
  </section>
  <a href="<?= url_to('logout')?>" class="logout">Keluar</a>
</section>
<?php endif;?>