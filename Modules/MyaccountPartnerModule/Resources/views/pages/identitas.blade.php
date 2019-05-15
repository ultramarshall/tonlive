<div class="row">
    <div class="col-md-6 float-left">
        <div class="form-group">
            <label>ID Penyedia </label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>Bentuk Usaha</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>User ID</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>Kabupaten / Kota</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
    </div>
    <div class="col-md-6 float-left">
        <div class="form-group">
            <label>NPWP</label>
            <input type="text" class="form-control form-control-sm" name="npwp" id="npwp">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>No. Fax</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>No. Handphone</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>Website</label>
            <input type="text" class="form-control form-control-sm" name="id" id="id">
        </div>
        <div class="form-group">
            <label>Kantor Cabang</label>
            <div class="form-check">
              <label class="form-check-label" for="check1">
                <input type="radio" class="form-check-input" id="check1" name="option[]" value="something" checked>Option 1
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label" for="check2">
                <input type="radio" class="form-check-input" id="check2" name="option[]" value="something">Option 2
              </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 d-flex">
        <button class="btn bg-gradient-primary btn-round text-white mx-auto">SAVE</button>
    </div>
</div>

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>