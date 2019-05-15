<?php $__env->startSection('content'); ?>
<style>
    .nav-custom {
        overflow-y: hidden;
        display: -webkit-box;
    }
    .nav-custom .nav-link.active {
        background-color: #f1f2f3;
        -webkit-box-shadow: 0 0 26px rgba(0, 0, 0, 0.06);
        box-shadow: 0 0 26px rgba(0, 0, 0, 0.06);
    }
    /* Extra small devices (portrait phones, less than 576px)*/
    @media (max-width: 575.98px) {
        .col-left {
            display: none;
        }
        .col-right {
            min-width: 100%
        }
    }

    /* Small devices (landscape phones, 576px and up)*/
    @media (min-width: 576px) and (max-width: 767.98px) {
        .col-left {
            display: none;
        }
        .col-right {
            min-width: 100%
        }
    }

    /* Medium devices (tablets, 768px and up)*/
    @media (min-width: 768px) and (max-width: 991.98px) {
        .col-left {
            display: none;
        }
        .col-right {
            min-width: 100%
        }
    }

    /* Large devices (desktops, 992px and up)*/
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .col-left {

        }
    }

    /* Extra large devices (large desktops, 1200px and up)*/
    @media (min-width: 1200px) {
        .col-left {

        }
    }
</style>
<section class="section bg-gray py-0">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-3 col-xl-3 bg-white p-5 rounded shadow-5  order-first order-md-first col-left">
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

                                <li class="nav-item nav-sideleft">
                                    <a class="nav-link text-dark" href="#">Profil<i class="nav-angle text-info"></i></a>
                                    <div class="nav">
                                        <a class="nav-link text-dark " href="/partner/mydocument">Dokumen Perusahaan</a>
                                        <a class="nav-link text-dark" href="#">Profil Perusahaan</a>
                                    </div>
                                </li>

                                <li class="nav-item nav-sideleft">
                                    <a class="nav-link text-dark" href="#">Pengadaan<i class="nav-angle text-info"></i></a>
                                    <div class="nav">
                                        <div class="nav">
                                            <a class="nav-link text-dark" href="http://tvri.go.id/about/profilepositiondireksi">Peraturan Lelang</a>
                                            <a class="nav-link text-dark" href="http://tvri.go.id/about/profileposition">Daftar Pengajuan</a>

                                            <hr class="mb-2 mt-2">
                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item nav-sideleft">
                                    <a class="nav-link " href="#">Ubah Password</a>

                                </li>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9 col-xl-9 bg-white p-4 pb-8 pt-5 rounded  order-first order-md-first shadow-5 col-right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="lead fw-400">Dokumen Perusahaan</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs-sm nav-tabs nav-custom" role="tablist">
                                <li class="nav-item" onclick="get_view('identitas')">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-view">Identitas Perusahaan</a>
                                </li>
                                <li class="nav-item" onclick="get_view('izin')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Izin Usaha</a>
                                </li>
                                <li class="nav-item" onclick="get_view('akta')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Akta</a>
                                </li>
                                <li class="nav-item" onclick="get_view('pemilik')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Pemilik</a>
                                </li>
                                <li class="nav-item" onclick="get_view('pengurus')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Pengurus</a>
                                </li>
                                <li class="nav-item" onclick="get_view('tenaga-ahli')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Tenaga Ahli</a>
                                </li>
                                <li class="nav-item" onclick="get_view('peralatan')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Peralatan</a>
                                </li>
                                <li class="nav-item" onclick="get_view('pengalaman')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Pengalaman</a>
                                </li>
                                <li class="nav-item" onclick="get_view('pajak')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Pajak</a>
                                </li>
                                <li class="nav-item" onclick="get_view('siKap')">
                                    <a class="nav-link" data-toggle="tab" href="#tab-view">Integrasi SiKap</a>
                                </li>
                            </ul>

                            <div class="tab-content p-4" >
                                <div class="tab-pane fade show active" id="tab-view" style="min-height: 500px"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footjs'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script>
    function myFunction(x) {
        if (x.matches) {
            localStorage.setItem("mobile", true);
            menuLeft = $('.nav-sidebar-hero').children();
            $('.navbar-mobile ul').append(menuLeft.clone())
        }
        else {
            localStorage.setItem("mobile", false);
            $('.navbar-mobile ul').find('.nav-sideleft').remove()
        }
    }

        
    

    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }
        });
        
        get_view('identitas');

        var x = window.matchMedia("(max-width: 992px)")
        myFunction(x)
        x.addListener(myFunction)

    });
    function get_view(pages) {
        $.ajax({
            type: 'POST',
            url: "/partner/pages",
            data: {pages: pages},
            beforeSend: function() {
                $('#tab-view').html('');
                $('#tab-view').block({
                    message: '<img src="<?php echo e(URL::asset("images/loader.svg")); ?>" style="width:100px; margin-left: -50px; margin-top: -50px"/>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.2,
                        cursor: 'wait',
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'none'
                    }
                });
                
            },
            success: function(response) {
                $('#tab-view').html(response);
                console.log(response)
            },
            error: function(response) {
                console.log(response)
            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Documents/worktrees/tonworktrees/public_html/Modules/MyaccountPartnerModule/Providers/../Resources/views/document.blade.php ENDPATH**/ ?>