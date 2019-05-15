<?php $__env->startSection('head'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<style>
    .rupiah {
        position: relative;
        min-width: 100px;
        text-align: right;
    }
    .rupiah:before {
        position: absolute;
        content: "Rp";
        left: 0;
        top: 0;
    }
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footjs'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header class="header py-8 text-center text-white bg-dark">
        
<div class="container">

    <div class="row">
        <div class="col-md-8 mx-auto">

            <h1 class="display-4">Daftar Pengadaan</h1>

        </div>
    </div>

</div>
</header>
<section>
    <div class="container py-7">
        <div class="row">
            <div class="col-lg-3 col-12 mt-3">
                <div class="form-group mb-0">

                    <select class="form-control form-control-lg">
                        <option>Personal</option>
                        <option>Startup</option>
                        <option>Business</option>
                        <option>Enterprise</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-3">
                <div class="form-group mb-0">

                    <input class="form-control rounded form-control-lg" type="text" placeholder="Cari daftar lelangs">
                </div>
            </div>
            <div class="col-lg-3 col-12 mt-3">
                <button class="btn  btn-block btn-lg p-3 btn-outline-primary">Cari Sekarang</button>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="row">
            

            <div class="col-md-8">
                <?php $__currentLoopData = $classifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-3">
                    <div class=" col-lg-12 shadow-5 bg-white p-5 pt-1 rounded  order-first order-md-first">
                        <h5 class="tender"><?php echo e(ucwords($c->name)); ?></h5>
                        <hr class="mt-1 mb-5" />
                        <table id="eproclistsGeneral" class="table display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama Paket</th>
                                    <th>Hps</th>
                                    <th>Akhir Pendaftaran</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $tender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i+1); ?></td>
                                        <td><?php echo e($t->tender_name); ?></td>
                                        <td>
                                            <div class="rupiah"><?php echo e(number_format($t->value,0, ',' , '.')); ?></div>
                                        </td>
                                        <td>20-12-2019</td>
                                        <td>
                                            <a  href="/eproc/detail-procurement/<?php echo e($t->id); ?>" class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
              
            <div class="col-lg-4 ">

                <div class="col-lg-12 shadow-5 bg-white py-5   rounded  order-first order-md-first">
                    <h5 class="tender">Berita Terkini Pengadaan</h5>
                    <hr class="mt-1 mb-3" />
                    <div class="row h-700" style="overflow:scroll">
                        <div class="col-lg-12">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing..</h5>
                            <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion...</p>
                            <a href="" class="fw-700">Baca selengkapnya</a>
                            <br/>
                            <small>02 Jan 2019</small>
                            <hr />
                        </div>

                        <div class="col-lg-12">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing..</h5>
                            <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion...</p>
                            <a href="" class="fw-700">Baca selengkapnya</a>
                            <br/>
                            <small>02 Jan 2019</small>
                            <hr />
                        </div>

                        <div class="col-lg-12">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing..</h5>
                            <p>Think the or organization same proposal to affected heard reclined in be it reassuring are attained opinion...</p>
                            <a href="" class="fw-700">Baca selengkapnya</a>
                            <br/>
                            <small>02 Jan 2019</small>
                            <hr />
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Desktop/wt/public_html/Modules/EporcModule/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>