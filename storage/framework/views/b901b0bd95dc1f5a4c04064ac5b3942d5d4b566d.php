<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/page.css')); ?>" rel="stylesheet" type="text/css">
</head>

<body>
  
        <main class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        
    <script src="<?php echo e(asset('js/page.js')); ?>"></script>
    <?php echo $__env->yieldContent('footjs'); ?>
</body>

</html><?php /**PATH /Users/marshall/Desktop/wt/public_html/resources/views/layout/blankMaster.blade.php ENDPATH**/ ?>