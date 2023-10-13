<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/admin.css" type="text/css" media="all" />
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
   <?= $this->include("Admin/components/navbar");?>
   <?= $this->RenderSection("main"); ?>
   <?= $this->include("Admin/components/footer");?>
   <script>
     $(document).ready(function(){
       const success = $('.success').data('success');
       if(success){
         Swal.fire({
           icon: 'success',
           title: 'success',
           text: success,
           timer: 3000
         });
       }
     });
   </script>
   <script src="<?= base_url();?>src/js/admin.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>