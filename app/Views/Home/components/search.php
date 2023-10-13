<section class="search">
  <form action="/Order" method="get">
    <input type="search" placeholder="Searching..." value="<?= ($search !== '') ? $search : ""?>" name="search" autocomplete="off" id="search"/>
    <button type="submit"><i class="ri-lg ri-search-line"></i></button>
  </form>
  <section class="menu-toggle">
    <i class="ri-lg ri-apps-line"></i>
  </section>
  <section class="menu-toggle-items">
    <a href="/Order" class="menu-toggle-items-link">
     <span>Produk Terbaru</span>
      </a>
    <a href="/Order?sort=diskon" class="menu-toggle-items-link">
     <span>Sedang Diskon</span>
      </a>
    <a href="/Order?sort=harga_termahal" class="menu-toggle-items-link">
     <span>Harga Termahal</span>
      </a>
    <a href="/Order?sort=harga_termurah" class="menu-toggle-items-link">
     <span>Harga Termurah</span>
      </a>
  </section>
</section>