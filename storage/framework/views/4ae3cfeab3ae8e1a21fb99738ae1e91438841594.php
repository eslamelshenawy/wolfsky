<meta charset="utf-8">
<?php if(empty($PageTitle)): ?>

<?php else: ?>

<title><?php echo e($PageTitle); ?> <?php echo e(($PageTitle !="")? "|":""); ?> <?php echo e(Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode'))); ?></title>
<?php endif; ?>
<?php if(empty($PageDescription)): ?>
<?php else: ?>

<meta name="description" content="<?php echo e($PageDescription); ?>"/>
<?php endif; ?>
<?php if(empty($PageDescription)): ?>
<?php else: ?>

<meta name="keywords" content="<?php echo e($PageKeywords); ?>"/>
<?php endif; ?>
<meta name="author" content="<?php echo e(URL::to('')); ?>"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(url('public')); ?>/frontEnd/new/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo e(url('public')); ?>/frontEnd/new/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo e(url('public')); ?>/frontEnd/new/css/flaticon.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(url('public')); ?>/frontEnd/new/css/animate.css" />
  <link rel="stylesheet" href="<?php echo e(url('public')); ?>/frontEnd/new/css/bootstrap-datepicker.css" />
  <link href="<?php echo e(url('public')); ?>/frontEnd/new/css/rs-settings.css" rel="stylesheet">
  <!-- Custom styles for this site -->
  <link href="<?php echo e(url('public')); ?>/frontEnd/new/css/style.css" rel="stylesheet">

<?php if( trans('backLang.direction')=="rtl"): ?>
<!-- <link href="<?php echo e(URL::to('frontEnd/css/rtl.css')); ?>" rel="stylesheet"/> -->

<?php endif; ?>

<!-- Favicon and Touch Icons -->
<?php if(Helper::GeneralSiteSettings("style_fav") !=""): ?>
    <link href="<?php echo e(URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_fav"))); ?>" rel="shortcut icon"
          type="image/png">
<?php else: ?>
    <link href="<?php echo e(URL::to('public/uploads/settings/nofav.png')); ?>" rel="shortcut icon" type="image/png">
<?php endif; ?>
<?php if(Helper::GeneralSiteSettings("style_apple") !=""): ?>
    <link href="<?php echo e(URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="72x72">
    <link href="<?php echo e(URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="114x114">
    <link href="<?php echo e(URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="144x144">
<?php else: ?>
    <link href="<?php echo e(URL::to('public/uploads/settings/nofav.png')); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::to('public/uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo e(URL::to('public/uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo e(URL::to('public/uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="144x144">
<?php endif; ?>
