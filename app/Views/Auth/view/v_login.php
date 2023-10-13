<?= $this->extend('Auth/layout/layout')?>
<?= $this->section('main')?>
 <form action="<?= url_to('login') ?>" method="post">
   <?= csrf_field();?>
   <h1>Sign In</h1>
   <?php if ($config->validFields === 'email') :?>
   <section class="form-group">
     <input type="email" name="login" placeholder=" " id="input5" class="<?= (session('errors.login')) ? 'invalid' : '' ?>"/>
     <label for="input5">Email Address</label>
   </section>
   <?php else :?>
   <section class="form-group">
     <input type="text" name="login" placeholder=" " id="input6" class="<?= (session('errors.login')) ? 'invalid' : '' ?>"/>
     <label for="input6">Email Or Username</label>
   </section>
   <?php endif;?>
   
   <?php if(session('errors.login')) :?>
   <section class="invalid-feedback">
     <span><?= session('errors.login')?></span>
   </section>
   <?php endif;?>
   
   <section class="form-group">
     <input type="password" name="password" placeholder=" " id="input7" class="<?= (session('errors.password')) ? 'invalid' : '' ?>"/>
     <label for="input7">Password</label>
   </section>
   <?php if(session('errors.password')) :?>
   <section class="invalid-feedback">
     <span><?= session('errors.password')?></span>
   </section>
   <?php endif;?>
   
   <?php if ($config->allowRemembering): ?>
						<section class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
							<?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
						</section>
<?php endif; ?>

   <button type="submit">Sign In</button>
   <a href="<?= url_to('register')?>" class="link"><?= lang('Auth.needAnAccount')?></a>
 </form>
<?= $this->endsection()?>