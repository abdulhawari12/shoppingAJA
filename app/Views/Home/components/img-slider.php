<section id="image-carousel" class="splide" aria-label="Beautiful Images">
	<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<img src="<?= $product['thumb_produk'] ?>" alt="">
			</li>
			<?php if ($product['detail_gambar_produk1'] !== null) : ?>
				<li class="splide__slide">
					<img src="<?= $product['detail_gambar_produk1'] ?>" alt="">
				</li>
			<?php endif; ?>
			<?php if ($product['detail_gambar_produk2'] !== null) : ?>
				<li class="splide__slide">
					<img src="<?= $product['detail_gambar_produk2'] ?>" alt="">
				</li>
			<?php endif; ?>
			<?php if ($product['detail_gambar_produk3'] !== null) : ?>
				<li class="splide__slide">
					<img src="<?= $product['detail_gambar_produk3'] ?>" alt="">
				</li>
			<?php endif; ?>
			<?php if ($product['detail_gambar_produk4'] !== null) : ?>
				<li class="splide__slide">
					<img src="<?= $product['detail_gambar_produk4'] ?>" alt="">
				</li>
			<?php endif; ?>
			<?php if ($product['detail_gambar_produk5'] !== null) : ?>
				<li class="splide__slide">
					<img src="<?= $product['detail_gambar_produk5'] ?>" alt="">
				</li>
			<?php endif; ?>
		</ul>
	</div>
</section>