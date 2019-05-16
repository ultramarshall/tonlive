<div class="row mb-5">

    <div class="col-md-12 float-left border-bottom">
        {{-- <h6>Akta Pendirian</h6> --}}
        <form class="col-md-12" method="POST" action="/partner/save-akta" id="form">
            <div class="form-group row">
                <label class="text-right col-3 float-left">Nomor <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="acta_no" id="acta_no" value="{{ $akta->acta_no }}">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Tanggal Surat</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="acta_date" id="acta_date" value="{{ $akta->acta_date }}">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Notaris</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="acta_notaris" id="acta_notaris" value="{{ $akta->acta_notaris }}">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Dokumen</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="acta_document" id="acta_document" value="{{ $akta->acta_document }}">
            </div>
        </form>
    </div>
    {{-- <div class="col-md-12 float-left border-bottom">
        <h6>Akta Perubahan Terakhir</h6>
        <form action="post" action="">
            <div class="form-group row">
                <label class="text-right col-3 float-left">Nomor <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Tanggal Surat</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Notaris</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="text-right col-3 float-left">Dokumen</label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
        </form>
    </div> --}}
</div>
<div class="row">
    <div class="col-12 d-flex">
        <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white mx-auto">SAVE</button>
    </div>
</div>

<!-- end