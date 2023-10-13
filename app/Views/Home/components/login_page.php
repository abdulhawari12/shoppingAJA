<?php if (!logged_in()) :?>
 <section class="not-found">
   <img src="<?= base_url()?>src/assets/icons/login.png" alt="Login" loading="lazy" />
   <h3>Oops..</h3>
   <span>Login terlebih dahulu!</span>
   <a href="<?= url_to('login')?>" class="btn-login">Login</a>
 </section>
<?php endif;?>