<?php $__env->startSection('content'); ?>
<header class="header py-8 text-center text-white bg-dark">
        <canvas class="constellation" width="1680" height="920"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="display-4">Berita terkini</h1>
                
                </div>
            </div>
        </div>
    </header>
<section class="  bg-gray">
        <div class="section">
            <div class="container">
               <style>
                    .blog-space {
                        white-space: nowrap; 
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }
               </style>
                <div class="row mt-5">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 mt-6">
                        <div class="col-lg-12 hover-shadow-6 bg-white ">
                            <div class="row">
                                <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                    
                                </div>
                                <div class="col-md-7 p-0">
                                    <div class="p-2 pt-6 pl-5 ">
                                        <small class="fw-500 text-dark mb-4"><?php echo e($blog->create_date); ?></small>
                                        <p class="lead ls-1 fw-500 text-dark"><?php echo e($blog->title); ?></p>
                                        <small class="text-justify"><?php echo substr($blog->body, 0, 90); ?>...</small>
                                        <br>
                                        <br>
                                        <a class="text-dark fw-600 small text-uppercase" href="/" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                </div>
                <!--end of row-->
    
                <div class="row mt-8">
                    <div class="col-lg-1 mx-auto">
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/BlogModule/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>