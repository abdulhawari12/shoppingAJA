<section class="not-found">
   <img src="<?= base_url()?>src/assets/icons/<?= $img_found?>" alt="Empty Cart" loading="lazy" />
   <h3><?= $title_found?></h3>
   <span><?php if($search !== '' && $search):?><?=$search?><?php endif;?> <?= $text_found?></span>
 </section>