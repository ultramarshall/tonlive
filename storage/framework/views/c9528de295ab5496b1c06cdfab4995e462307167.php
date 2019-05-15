<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <?php echo $__env->yieldContent('head'); ?>
    <link href="<?php echo e(asset('css/page.css')); ?>" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
</head>

<body>

     
    <?php echo $__env->make('layout._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    <?php echo $__env->make('layout._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js/page.js')); ?>"></script>

    <?php echo $__env->yieldContent('footjs'); ?>
    
</body>

</html><?php /**PATH /Users/marshall/Desktop/ton/public_html/resources/views/layout/master.blade.php ENDPATH**/ ?>