<?= $this->extend('Admin/layout/layout')?>
<?= $this->section('main')?>
<section class="container">
  <form action="/admin/AddProduct" method="post">
    <?= csrf_field();?>
    <h1>Tambah Produk</h1>
    <section class="form-group">
      <input type="text" name="nama" placeholder=" " autofocus="" autocomplete="off" id="input1" class="<?= (validation_show_error('nama')) ? 'invalid' : '' ?>" value="<?= set_value('nama') ?>"/>
      <label for="input1">Nama</label>
    </section>
    
  <?php if(validation_show_error('nama')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('nama');?></span>
      </section>
  <?php endif;?>
  
    <section class="form-group">
      <input type="number" name="harga" placeholder=" " autocomplete="off" id="input2" class="<?= (validation_show_error('harga')) ? 'invalid' : '' ?>" value="<?= set_value('harga') ?>"/>
      <label for="input2">Harga</label>
    </section>
    
  <?php if(validation_show_error('harga')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('harga');?></span>
      </section>
  <?php endif;?>
  
    <section class="form-group">
      <input type="text" name="kategori" placeholder=" "  autocomplete="off" id="input3" class="<?= (validation_show_error('kategori')) ? 'invalid' : '' ?>" value="<?= set_value('kategori') ?>"/>
      <label for="input3">Kategori</label>
    </section>
  <?php if(validation_show_error('kategori')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('kategori');?></span>
      </section>
  <?php endif;?>
    <div class="custom-select">
     <select name='warna'>
    <option value="kosong">Pilih Warna</option>
    <option value="kosong">Tidak Ada</option>
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
    <option value="black">Black</option>
    <option value="purple">Purple</option>
    <option value="orange">Orange</option>
    <option value="pink">Pink</option>
    <option value="white">White</option>
    <option value="gold">Gold</option>
    <option value="silver">Silver</option>
    <option value="gray">Gray</option>
  </select>
    </div>
    <section class="form-group">
      <input type="text" name="thumbnail" placeholder=" "  autocomplete="off" id="input6" class="<?= (validation_show_error('thumbnail')) ? 'invalid' : '' ?>" value="<?= set_value('thumbnail') ?>"/>
      <label for="input6">Thumbnail</label>
    </section>
    <?php if(validation_show_error('thumbnail')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('thumbnail');?></span>
      </section>
  <?php endif;?>
    <section class="form-group">
      <input type="text" name="detail1" placeholder=" "  autocomplete="off" id="input7" value="<?= set_value('detail1') ?>"/>
      <label for="input7">Detail Gambar 1</label>
    </section>
    <section class="form-group">
      <input type="text" name="detail2" placeholder=" "  autocomplete="off" id="input8" value="<?= set_value('detail2') ?>"/>
      <label for="input8">Detail Gambar 2</label>
    </section>
    <section class="form-group">
      <input type="text" name="detail3" placeholder=" "  autocomplete="off" id="input9" value="<?= set_value('detail3') ?>"/>
      <label for="input9">Detail Gambar 3</label>
    </section>
    <section class="form-group">
      <input type="text" name="detail4" placeholder=" "  autocomplete="off" id="input10" value="<?= set_value('detail4') ?>"/>
      <label for="input10">Detail Gambar 4</label>
    </section>
    <section class="form-group">
      <input type="text" name="detail5" placeholder=" "  autocomplete="off" id="input11" value="<?= set_value('detail5') ?>"/>
      <label for="input11">Detail Gambar 5</label>
    </section>
    
    <section class="form-group">
      <input type="number" name="diskon" placeholder=" " autocomplete="off" id="input4" maxlength="100" class="<?= (validation_show_error('diskon')) ? 'invalid' : '' ?>" value="<?= (set_value('diskon')) ? set_value('diskon') : '0' ?>"/>
      <label for="input4">Diskon</label>
    </section>
    
    <?php if(validation_show_error('diskon')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('diskon');?></span>
      </section>
  <?php endif;?>
  
    <section class="form-group">
      <input type="number" name="stok" placeholder=" " autocomplete="off" id="input12"  class="<?= (validation_show_error('stok')) ? 'invalid' : '' ?>" value="<?= (set_value('stok')) ? set_value('stok') : '1' ?>"/>
      <label for="input12">Stok</label>
    </section>
    <?php if(validation_show_error('stok')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('stok');?></span>
      </section>
  <?php endif;?>
  
      <section class="form-group">
    <textarea id="input5" placeholder=" " name="deskripsi" class="<?= (validation_show_error('deskripsi')) ? 'invalid' : '' ?>"><?php if(set_value('deskripsi')) :?><?= set_value('deskripsi') ?><?php endif; ?></textarea>
      <label for="input5" class="textarea">Deskripsi</label>
      </section>
      <?php if(validation_show_error('deskripsi')) : ?>
      <section class="invalid-feedback">
        <span><?= validation_show_error('deskripsi');?></span>
      </section>
  <?php endif;?>
  
      <button type="submit"><i class="ri-lg ri-add-line"></i> Tambah</button>
  </form>
</section>
<?= $this->endsection()?>