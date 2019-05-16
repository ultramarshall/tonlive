<!--  start -->
<div class="row mb-5">

    <div class="col-md-12 float-left border-bottom">
        <form class="col-md-12" method="POST" action="/partner/save-pemilik" id="form">
            <div class="form-group row">
                <label class="float-left text-right col-3">Nama <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="nama" id="nama" value="{{ $pemilik->nama }}">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Nomor KTP <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="ktp" id="ktp" value="{{ $pemilik->ktp }}">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Alamat <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="alamat" id="alamat" value="{{ $pemilik->alamat }}">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Saham <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="saham" id="saham" value="{{ $pemilik->saham }}">
            </div>
        </form>
    </div>
    
</div>
<div class="row">
    <div class="col-12 d-flex">
        <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white mx-auto">SAVE</button>
    </div>
</div>

<!-- end -->