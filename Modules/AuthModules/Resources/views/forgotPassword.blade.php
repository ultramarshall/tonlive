@extends('authmodules::layouts.master')

@section('title','Forget Password')
    @section('header')
    <style>
    .error {
        color: orange;
    }
    </style>
    @endsection

@section('content')
<main>
    <div class="h-fullscreen py-0">
        <section class="container-fluid">
            <div class="row h-full">
                <div class="col-lg-6 col-sm-12 hidden-lg-down d-none d-md-block" style="background-image: url(http://infranaukri.com/en/admin/company/151223120330_abw%20builder.jpg);
               height: 100%; max-width: 100%;">
                    <div class="h-fullscreen"></div>
                </div>
                <div class="col-lg-6 col-sm-12 bg-white">
                    <div class="h-fullscreen center-vh">
                        <div class="container">
                            <div class="row gap-y">
                                <div class="col-lg-6 my-12 col-12 col-md-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 ">
                                            <div class="section-dialog">
                                                <header class=" text-center">
                                                    <a href="/">
                                                        <img src="{{asset('images/companyAssets/logoPrimary.png')}}" data-aos="fade-up" class="img-fluid mb-7 " width="200" alt />
                                                    </a>
                                                    <div class="alert alert-danger" id="alert-error" style="display:none">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                            

                                                        </ul>
                                                    </div>
                                                    <p class="text-center text-muted fs-13 pt-0">Password akan di kirim melalui email</p>
                                                    <p class="text-danger"><b id="messagerespon"> </b></p>
                                                </header>
                                                <form id="forgotpass" class="pt-0 input-line" method="POST" action="/auth/forgotpass">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input class="form-control" name="email" type="text" id="email" defaultValue placeholder="Email" />
                                                    </div>
                                                   
                                                    <div class="text-center">
                                                        <button type="submit" id="buttonsubmit" class="btn btn-round btn-lg btn-primary"><i class="fa fa-door-open"></i> Reset</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-dark text-center">
                                            <div class="spinner-border text-muted"></div>
                                            <a href="/"><i class="fa fa-arrow-left"></i> Back to Home</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection

@section('footer')
<style>
    label.error { color: red; font-size: 10px;}
</style>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
$("#forgotpass").submit(function (e) {
    e.preventDefault();
    $(this).validate({
        rules: {
            email: {required: true,email:true},
        }
    });
    if ($(this).valid()) {
        var data = $("#forgotpass").serializeArray();
        $.ajax({
            type: 'POST',
            url: "/auth/forgotpass",
            data: data,
            dataType:"json",
            beforeSend: function() {

            },

            success: function(response) {
                // if (response) window.location.href = '/partner/myaccount';
                console.log(response)
            },
            error: function(response) {
                console.log(response)
            }
        })
    }
    return false;
});
</script>
@endsection