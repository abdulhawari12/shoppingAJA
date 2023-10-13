<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0085FF" />
    <title>Login & Register</title>
    <link rel="stylesheet" href="<?= base_url()?>src/css/auth.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url()?>src/css/remixicon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= base_url()?>src/css/sweetalert2.min.css" type="text/css" media="all" />
    <script src="<?= base_url()?>src/js/jquery.js"></script>
    <script src="<?= base_url()?>src/js/sweetalert2.min.js"></script>
  </head>
  <body>
    <section class="success" data-success="<?= session()->getFlashData('success')?>"></section>
<section class="errors" data-errors="<?= session()->getFlashData('error')?>"></section>

    <?= $this->RenderSection('main')?>
    
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
});
  </script>
  </body>
</html>