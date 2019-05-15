<?php $__env->startSection('title','Contact Us |'); ?>
<?php $__env->startSection('content'); ?>

<style>
    .error {
      color: #FF4861;
    }
  </style>
<section class="section pb-0">
  <div class="container">
    <form class="row gap-y" method="POST" id="sendmail">
      <?php echo csrf_field(); ?>
      <div class="col-12 col-lg-6">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
              <?php echo e(session('status')); ?>

          </div>
      <?php endif; ?>
        <div class="row">
          <div class="col-lg-12">
              <h5 class="ls-0">Hubungi Kami  </h5>
          </div>
          <div class="form-group col-12 col-md-6">
            <input class="form-control form-control-lg" type="text" id="firstname" name="firstname" placeholder="First Name">
          </div>
          <div class="form-group col-12 col-md-6">
            <input class="form-control form-control-lg" type="text" id="lastname" name="lastname" placeholder="Last Name">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-12 col-md-6">
            <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group col-12 col-md-6">
            <input class="form-control form-control-lg" type="number" id="phone" name="phone" placeholder="Phone">
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-lg" id="message" rows="4" placeholder="What do you have in mind?"
            name="message"></textarea>
        </div>
        <button class="btn btn-lg btn-round btn-lg btn-primary w-180" id="buttonsubmit" onclick="sendmail()">Kirim Pesan</button>
      </div>
      <div class="col-12 offset-lg-1 col-lg-5 text-center text-lg-left">
        <h5 class="ls-0">Our Location</h5>
        <p> Jl. Ki Male No.18, Panunggangan Tim., Pinang,<br> Kota Tangerang, Banten 15143</p>
        <a href="tel:081287333882">
          <p>(+62) 812-8733-3882</p>
        </a>
        <p>
          <a href="mailto:support@mymails.id">support@mymail.id </a>
          <br>
          <a href="mailto:marketing@mymails.id">marketing@mymail.id</a>
        </p>
      </div>
    </form>
  </div>
 <div class="row mt-10">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.086022665662!2d106.6570702!3d-6.2278906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c4a67076ba30a36!2sWorktrees!5e0!3m2!1sen!2sid!4v1504093807953"
    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
  
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footjs'); ?>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<div class="modal fade " id="modalmailsend" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content bg-white  shadow-9">
        <div class="modal-body">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-lg-3 col-5 mx-auto">
                        <img src="http://ncommerce.id/assets/src/assets/img/logo.png" data-aos="fade-top"><br />
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 col-12 mx-auto text-center">
                        <h5 class="text-dark"><span id="username_signup3">Your Message Has Been Sent!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });
function sendmail() {
   
    $("#sendmail").validate({
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            message: {
                required: true,
                minlength: 7
            }
        }
    });
    if ($('#sendmail').valid()) {
        var data = {
            firstname: $('#firstname').val(),
            lastname: $('#lastname').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            message: $('#message').val()
        }
        $.ajax({
            type: 'POST',
            url: "/contact/sendmail",
            data: data,
            beforeSend: function() {
                $("#buttonsubmit").attr("disabled", true);
                $('#buttonsubmit').html('Sending');
            },
            success: function() {
                $("#buttonsubmit").attr("disabled", false);
                $('#modalmailsend').modal('show');
                $('#buttonsubmit').html('Your mail has been sent!');
                setTimeout(function() {
                    $('#modalmailsend').modal('hide');
                }, 1500)
                setTimeout(function() {
                    $('#buttonsubmit').html('Send');
                }, 2000)
            },
            error: function() {
                $('#buttonsubmit').effect('shake').addClass('btn-danger');
                $('#buttonsubmit').html('Wrong!');
                $("#buttonsubmit").attr("disabled", false);
                setTimeout(function() {
                    $('#buttonsubmit').html('Login').removeClass('btn-danger');
                }, 1500);

            }
        })
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/ContactModule/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>