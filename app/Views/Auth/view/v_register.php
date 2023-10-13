<?= $this->extend('Auth/layout/layout')?>
<?= $this->section('main')?>
 <form action="<?=url_to('register')?>" method="post">
   <?= csrf_field();?>
   <h1>Sign Up</h1>
   <section class="form-group">
     <input type="email" name="email" placeholder=" " id="input1" class="<?= (session('errors.email')) ? 'invalid' : '' ?>" value="<?= old('email')?>"/>
     <label for="input1">Email Address</label>
   </section>
   <section class="text-muted">
     <span><?= lang('Auth.weNeverShare')?></span>
   </section>
   <?php if(session('errors.email')) :?>
   <section class="invalid-feedback">
     <span><?= session('errors.email')?></span>
   </section>
   <?php endif; ?>
   <section class="form-group">
     <input type="text" name="username" placeholder=" " id="input2" class="<?= (session('errors.username')) ? 'invalid' : '' ?>" value="<?= old('username')?>"/>
     <label for="input2">Username</label>
   </section>
      <?php if(session('errors.username')) :?>
   <section class="invalid-feedback">
     <span><?= session('errors.username')?></span>
   </section>
   <?php endif; ?>
   <section class="form-group">
     <input type="password" name="password" placeholder=" " id="input3"/>
     <label for="input3">Password</label>
   </section>
   <section class="form-group">
     <input type="password" name="pass_confirm" placeholder=" " id="input4"/>
     <label for="input4">Confirm Password</label>
   </section>
   
   <button type="submit">Sign Up</button>
   <a href="<?= url_to('login')?>" class="link"><?= lang('Auth.alreadyRegistered')?><?= lang('Auth.signIn')?></a>
 </form>
<?= $this->endsection()?>