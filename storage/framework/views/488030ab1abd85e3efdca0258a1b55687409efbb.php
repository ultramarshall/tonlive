<?php $__env->startSection('content'); ?>
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 col-xl-3 bg-white p-5 rounded shadow-5  order-first order-md-first">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img class="logo-dark" style="width:200px;" src="http://127.0.0.1:8000/images/companyAssets/logoPrimary.png" alt="logo">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-12 text-center">
                        <hr class="mt-2 mb-2" />
                        <p>PT Indonesia Sejahtera</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">

                        <hr class="d-md-none">
                        <aside class="sidebar sidebar-stick-shadow  pr-0 pt-0 ">
                            <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true">
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Profil<i class="nav-angle text-info"></i></a>
                                    <div class="nav">
                                        <a class="nav-link " href="/partner/mydocument">Dokumen Perusahaan</a>
                                        <a class="nav-link" href="#">Profil Perusahaan</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pengadaan<i class="nav-angle text-info"></i></a>
                                    <div class="nav">
                                        <a class="nav-link fw-700" href="#">Pengadaan</a>
                                        <div class="nav">
                                            <a class="nav-link" href="http://tvri.go.id/about/profilepositiondireksi">Peraturan Lelang</a>
                                            <a class="nav-link" href="http://tvri.go.id/about/profileposition">Daftar Pengajuan</a>
                                           
                                            <hr class="mb-2 mt-2">
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link " href="#">Ubah Password</a>
                                       
                                    </li>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8  offset-lg-1 shadow-5 col-xl-8 bg-white p-4 pb-8 pt-5 rounded  order-first order-md-first">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="lead fw-400">Dokument Perusahaan</p>
                        <hr />
                    </div>
                </div>
                <div class="row ">
                        <div class="col-lg-12">
                            <p class="lea fw-400">Dashboard</p>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-6">
                     
                        <div class="card text-white shadow-4 justify-content-end bg-img" style="background-image: url(<?php echo e(asset('images/companyAssets/slider1.jpg')); ?>);" data-scrim-bottom=10>
                           
                            <div class="card-body">
                                  
                                    <h5><span  class="lead-9 fw-900 ">3</span> <span class="display-4 fw-400">&nbsp;Pengajuan</span></h5>
                                   
                           
                            </div>
                        </div>

                      

                        
                                
                    </div>

                  

                    <div class="col-lg-6">
                     
                            <div class="card text-white shadow-4 justify-content-end bg-img" style="background-image: url(<?php echo e(asset('images/companyAssets/slider2.jpg')); ?>);" data-scrim-bottom=10>
                       
                                    <div class="card-body">
                                            <h5><span  class="lead-9 fw-900 ">2</span> <span class="display-4 fw-400">&nbsp;Pesan</span></h5>
                                  
                                    </div>
                                </div>
                                    
                        </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <p class="lea fw-400">Status Pengajuan</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-outline-primary rounded">lihat selengkapnya</button>
                    </div>
                </div>            
            </div>
            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Documents/worktrees/tonworktrees/public_html/Modules/MyaccountPartnerModule/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>