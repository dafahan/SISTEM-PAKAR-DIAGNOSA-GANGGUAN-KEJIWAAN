

<!DOCTYPE html>
<?php require_once 'function.php'; ?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title><?= (isset($_SESSION['title']) ? $_SESSION['title'] : 'Admin'); ?></title>

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/css/vendors.min.css'); ?>">
  
  <?php if (isset($prepend_style)) : ?>
    <?php foreach ($prepend_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?= base_url($tag_style); ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <?php require_once 'style.php'; ?>

  <?php if (isset($addon_style)) : ?>
    <?php foreach ($addon_style as $tag_style) : ?>
      <link rel="stylesheet" href="<?= base_url($tag_style); ?>">
    <?php endforeach; ?>
  <?php endif; ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

  <?php require_once 'sidebar.php' ?>

  <!-- BEGIN: Content-->
  <div class="app-content content">

    <?php require_once 'topbar.php'; ?>

    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

      <?= $this->renderSection('content') ?>

      </div>
    </div>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php require_once 'footer.php'; ?>

  <!-- BEGIN: Vendor JS-->
  <script src="<?= base_url('assets/vendors/js/vendors.min.js'); ?>"></script>
  <!-- BEGIN Vendor JS-->

  <?php if (isset($prepend_script)) : ?>
    <?php foreach ($prepend_script as $tag_script) : ?>
      <script src="<?= base_url($tag_script); ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php require_once 'script.php' ?>

  <?php if (isset($addon_script)) : ?>
    <?php foreach ($addon_script as $tag_script) : ?>
      <script src="<?= base_url($tag_script); ?>"></script>
    <?php endforeach; ?>
  <?php endif; ?>

</body>
<!-- END: Body-->

</html>
