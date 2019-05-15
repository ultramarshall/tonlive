 
<?php $__env->startSection('content'); ?>

<section class="bg-primary pb-10 pt-6 h-auto">
    <!-- <canvas class="constellation" data-color="rgba(255,255,255, 0.3)" width="1680" height="920"></canvas> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center">
                <img class=" logo-dark" style="width:200px;" src="<?php echo e(asset('images/companyAssets/logoPrimary.png')); ?>" alt="logo">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-white text-center">
                <h3>Form Pendaftaran Rekanan</h3>
                <p class="fs-18">Silahkan isi form di bawah ini untuk mendaftarkan perusahaan anda untuk menjadi rekanan kami</p>
            </div>
        </div>

        <div class="row ">
            <div class="container p-5 bg-white mt-5   rounded">
            
            <form class="col-md-12" method="POST" id="register">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Catatan: <span class="text-danger">*</span> Wajib diisi </p>
                    </div>
                </div>
                    <div class="row ">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Vendor</label>
                                <select class="form-control select2" name="vendor_type" id="vendor_type">
                                    <?php $__currentLoopData = $vendor_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($i->id); ?>" >
                                        <span class="text-uppercase"><?php echo e(strtoupper($i->name)); ?></span>
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bentuk Usaha</label>

                                <select class="form-control form-control-sm select2" name="company_type" id="company_type">
                                    <?php $__currentLoopData = $bussiness_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($i->id); ?>"><?php echo e(strtoupper($i->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control form-control-sm" name="company_name" id="company_name">
                            </div>
                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input type="text" class="form-control form-control-sm" name="postal_code" id="postal_code">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>

                                <select class="form-control form-control-sm select2" name="province" id="province">
                                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <option value="<?php echo e($i->id); ?>" >
                                        <span class="text-uppercase"><?php echo e(strtoupper($i->name)); ?></span>
                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kabupaten</label>
                                <select class="form-control form-control-sm select2" name="regencies" id="regencies" disabled></select>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <select class="form-control form-control-sm select2" name="districts" id="districts" disabled></select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text" class="form-control form-control-sm" name="npwp" id="npwp">
                            </div>
            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-sm" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control form-control-sm" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" class="form-control form-control-sm" name="fax" id="fax">
                            </div>
                            <div class="form-group">
                                <label>Telepon Seluler</label>
                                <input type="text" class="form-control form-control-sm" name="hp" id="hp">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control form-control-sm" name="address" id="address" cols="30" rows="5" ></textarea>
                            </div>
                        </div>

                    </div>

                <div class="col-lg-12 text-right">
                    <hr />
                    <button type="submit" class="btn btn-primary btn-round" id="buttonsubmit">Daftar</button>
                </div>
            </form>
            

            </div>

            <div class="col-lg-12 text-center mt-6">
                <a href="/" class="btn btn-outline-light text-center btn-round btn-lg ">kembali ke halaman utama</a>
            </div>

        </div> 

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<style>

    label.error { color: red; font-size: 10px;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" />
<link rel="stylesheet" href="https://raw.githack.com/berkan52/select2-bootstrap4-theme/master/dist/select2-bootstrap4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footjs'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        }
    });
    $('.select2').select2({
        theme: "bootstrap4"
    });
});
$("#province").on('change', function(){    
    $.ajax({
        type: 'POST',
        url: "/register/get-regencies",
        data: { id : $(this).val() },
        beforeSend: function() {
            $('#regencies').attr('disabled', 'disabled')
            $('#districts').attr('disabled', 'disabled')
            $('#regencies').html('')
            $('#districts').html('')
        },

        success: function(response) {
            $("#regencies").removeAttr('disabled');
            $("#regencies").html(response);
        },
        error: function(response) {
        }
    })
});
$("#regencies").on('change', function(){ 
    $.ajax({
        type: 'POST',
        url: "/register/get-districts",
        data: { id : $(this).val() },
        beforeSend: function() {
            $('#districts').attr('disabled', 'disabled')
            $('#districts').html('')
        },

        success: function(response) {
            $("#districts").removeAttr('disabled');
            $("#districts").html(response);
        },
        error: function(response) {
        }
    })
});
$("#register").submit(function (e) {
    e.preventDefault();

    $("#register").validate({
        rules: {
            company_name: {required: true},
            email: {required: true,email:true},
            npwp: {required: true},
            phone: {required: true},
            address: {required: true},
        }
    });
    if ($('#register').valid()) {
        var data = $("#register").serializeArray();
        $.ajax({
            type: 'POST',
            url: "/register/store",
            data: data,
            dataType:"json",
            beforeSend: function() {
                
            },

            success: function(response) {
                window.location.href = '/register/success'
            },
            error: function(response) {
                console.info(response)
            }
        })
    }
    return true;
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.blankMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/RegistratioPartnernModule/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>