<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> | NCommerce</title>
    <!-- Styles -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('/site.webmanifest')); ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="<?php echo e(asset('css/page.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php echo $__env->yieldContent('header'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('js/page.js')); ?>"></script>
    <?php echo $__env->yieldContent('footer'); ?>
</body>

</html><?php /**PATH /Users/marshall/Desktop/wt/public_html/Modules/AuthModules/Providers/../Resources/views/layouts/master.blade.php ENDPATH**/ ?>