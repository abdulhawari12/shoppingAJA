<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta name="theme-color" content="#0085FF" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/style2.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/remixicon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/sweetalert2.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/splide.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/splide-default.min.css" type="text/css" media="all" />
    
    <script src="<?= base_url();?>src/js/jquery.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?= base_url();?>src/js/sweetalert2.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?= base_url();?>src/js/splide.min.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body class="<?= $padding_top?>">
    
<section class="success" data-success="<?= session()->getFlashData('success')?>"></section>
<section class="errors" data-errors="<?= session()->getFlashData('errors')?>"></section>
<!-- mengambil pesan dari flashdata session -->
<section class="confirm" data-confirm="<?= session()->getFlashData('confirm')?>"></section>


   <?= $this->include("Wallet/components/header");?>
   <?= $this->RenderSection("main"); ?>
  <script>
    $(document).ready(function(){
// ambil attribute data yg berisi flashdata
  const success = $('.success').data('success');
  const errors = $('.errors').data('errors');
  const id = $('.id-cart').data('id');
  const confirm = $('.confirm').data('confirm');
  // lalu combine dgn sweetalert
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
});
  </script>
  <script>
    
  </script>
   <script src="<?= base_url();?>src/js/script.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>