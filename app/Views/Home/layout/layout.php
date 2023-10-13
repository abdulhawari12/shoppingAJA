<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/remixicon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/sweetalert2.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/splide.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/splide-default.min.css" type="text/css" media="all" />
    
    <script src="<?= base_url();?>src/js/jquery.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?= base_url();?>src/js/sweetalert2.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?= base_url();?>src/js/splide.min.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>
    
<section class="success" data-success="<?= session()->getFlashData('success')?>"></section>
<section class="errors" data-errors="<?= session()->getFlashData('errors')?>"></section>
<section class="confirm" data-confirm="<?= session()->getFlashData('confirm')?>"></section>
   <?= $this->include("Home/components/header");?>
   <?= $this->RenderSection("main"); ?>
   <?= $this->include("Home/components/footer");?>
   
   <script>
   $(document).ready(function(){
  const search = $('.data-search').data('search');
  const page = $('.data-page-url').data('page');
  const searchURL = `http://localhost:8080/Order?search=${ search }`;
  const url1 = 'http://localhost:8080/Order';
  const pageURL1 = `http://localhost:8080/Order?page_product=${ page }`;
  const pageURL2 = `http://localhost:8080/Order?sort=diskon&page_product=${ page }`;
  const pageURL3 = `http://localhost:8080/Order?sort=harga_termahal&page_product=${ page }`;
  const pageURL4 = `http://localhost:8080/Order?sort=harga_termurah&page_product=${ page }`;
  const url2 = 'http://localhost:8080/Order?sort=diskon';
  const url3 = 'http://localhost:8080/Order?sort=harga_termahal';
  const url4 = 'http://localhost:8080/Order?sort=harga_termurah';
  const url5 = 'http://localhost:8080/Order?sort=kategori';
  const pageURL5 = `http://localhost:8080/Order?sort=kategori&page_product=${ page }`;
  const menuToggleItemsLink = document.querySelectorAll(".menu-toggle-items-link");
  const navbarItems = document.querySelectorAll(".navbar-items");
  
  if(location.href == url1){
      menuToggleItemsLink[0].classList.add('actived');
      navbarItems[1].classList.add('active');
  }
  else if(location.href == pageURL5){
      navbarItems[1].classList.add('active');
  }
  else if(location.href == url5){
      navbarItems[1].classList.add('active');
  }
  else if(location.href == pageURL1){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[0].classList.add('actived');
  }
  else if(location.href == pageURL2){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[1].classList.add('actived');
  }
  else if(location.href == pageURL3){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[2].classList.add('actived');
  }
  else if(location.href == pageURL4){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[3].classList.add('actived');
  }
   else if(location.href == url2){
      menuToggleItemsLink[1].classList.add('actived');
      navbarItems[1].classList.add('active');
  }
   else if(location.href == url3){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[2].classList.add('actived');
  }
   else if(location.href == url4){
      navbarItems[1].classList.add('active');
      menuToggleItemsLink[3].classList.add('actived');
  }else if(location.href == searchURL){
      navbarItems[1].classList.add('active');
  }
   });
   </script>
   <script>
   const incre = document.querySelector('#increment');
   const decre = document.querySelector('#decrement');
     function increment(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    const max = input.getAttribute("max");
    if (value < max) {
     value = isNaN(value) ? 0: value;
     value++;
    input.value = value;
    } 
  }

  function decrement(a, b) {
     var input = b.nextElementSibling;
     var value = parseInt(input.value, 10);
    if (value > 1) {
     value = isNaN(value) ? 0: value;
     value--;
     input.value = value;
    }
  }
  </script>
  <script>
    $(document).ready(function(){
      const success = $('.success').data('success');
  const errors = $('.errors').data('errors');
  const id = $('.id-cart').data('id');
  const confirm = $('.confirm').data('confirm');
  if(success){
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: success
})
  }
  else if(errors){
    Swal.fire({
      icon: 'error',
      title: 'Opps',
      text: errors,
      timer: 3500
    });
  }
  $('.deleted-all').on('click', function(){
    Swal.fire({
  title: 'Apakah ingin menghapus?',
  text: "Keranjang belanja akan terhapus secara permanen",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url: `http://localhost:8080/Cart/AllDelete/${ id }`,
      type: 'DELETE',
    });
    location.reload();
  }
})
});
});
  </script>
   <script src="<?= base_url();?>src/js/script.js" type="text/javascript" charset="utf-8"></script>
   <script>
     new Splide('#image-carousel').mount();
   </script>
  </body>
</html>