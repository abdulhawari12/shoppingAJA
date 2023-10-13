<?= $this->extend('Wallet/layout/layout') ?>
<?= $this->section('main') ?>
<form class="box-edit" action="/EditProfile/<?= user_id() ?>" method="post">
  <section class="profil-picture">
    <img src="<?= base_url('/src/assets/profile/' . user()->profile) ?>" alt="My Profil" loading="lazy" />
  </section>
  <section class="form-group">
    <input type="email" name="email" autocomplete="off" value="<?= user()->email ?>" placeholder=" " id="input2" />
    <label for="input2">Email Address</label>
  </section>
  <section class="form-group">
    <input type="text" name="username" autocomplete="off" value="<?= user()->username ?>" placeholder=" " id="input1" />
    <label for="input1">Username</label>
  </section>
  <section class="form-group">
    <input type="number" name="no_telp" autocomplete="off" value="<?= user()->no_telp ?>" placeholder=" " id="input3" />
    <label for="input3">Nomor Telepon</label>
    <label for='input3' class="no">+62</label>
  </section>
  <section class="form-group">
    <input type="text" name="alamat" autocomplete="off" value="<?= user()->alamat ?>" placeholder=" " id="input4" />
    <label for="input4">Alamat Lengkap</label>
  </section>
  <section class="form-group">
    <input type="text" name="kab" autocomplete="off" value="<?= user()->kab ?>" placeholder=" " id="input5" />
    <label for="input5">Kabupaten</label>
  </section>
  <section class="form-group">
    <input type="text" name="prov" autocomplete="off" value="<?= user()->prov ?>" placeholder=" " id="input6" />
    <label for="input6">Provinsi</label>
  </section>
  <button type="submit"><i class="ri-lg ri-add-line"></i> Edit Profile</button>
</form>
<?= $this->endsection() ?>