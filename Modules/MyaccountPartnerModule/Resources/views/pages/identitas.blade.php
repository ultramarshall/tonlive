<div class="row">
    <form class="col-md-12" method="POST" action="/partner/save-identity" id="form">
        <div class="col-md-6 float-left">
            <div class="form-group">
                <label>ID Penyedia </label>
                <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
            </div>
            <div class="form-group">
                <label>Bentuk Usaha</label>
                {{-- <input type="text" class="form-control form-control-sm" name="company_type" id="company_type" value="{{$vendor->company_type}}"> --}}
                <select class="form-control form-control-sm select2" name="company_type" id="company_type">
                    @foreach($company_type as $i) 
                       
                    <option value="{{$i->id}}" {{ ($vendor->company_type == $i->id)?'':'selected' }}>
                        <span class="text-uppercase" value="{{ $i->id }}">{{ strtoupper($i->name) }}</span>
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>User ID</label>
                <input type="text" class="form-control form-control-sm" name="id" id="id" value="{{$vendor->id}}">
            </div>
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="{{$vendor->company_name}}">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                {{-- <input type="text" class="form-control form-control-sm" name="address" id="address" value="{{$vendor->address}}"> --}}
                <textarea class="form-control form-control-sm" name="address" id="address" cols="30" rows="4">{{$vendor->address}}</textarea>
            </div>
            <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" class="form-control form-control-sm" name="postal_code" id="postal_code" value="{{$vendor->postal_code}}">
            </div>
            <div class="form-group">
                <label>Provinsi</label>
                <select class="form-control form-control-sm select2" name="province" id="province">
                    @foreach($provinces as $i) 
                    <option value="{{$i->id}}" >
                        <span class="text-uppercase">{{ strtoupper($i->name) }}</span>
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Kabupaten / Kota</label>
                <select class="form-control form-control-sm select2" name="regencies" id="regencies" disabled></select>
            </div>
            <div class="form-group">
                <label>Kelurahan</label>
                <select class="form-control form-control-sm select2" name="districts" id="districts" disabled></select>
            </div>
        </div>
        <div class="col-md-6 float-left">
            <div class="form-group">
                <label>NPWP</label>
                <input type="text" class="form-control form-control-sm" name="npwp" id="npwp" value="{{ $vendor->npwp }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control form-control-sm" name="email" id="email" value="{{ $vendor->email }}">
            </div>
            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control form-control-sm" name="office_number" id="office_number" value="{{ $vendor->office_number }}">
            </div>
            <div class="form-group">
                <label>No. Fax</label>
                <input type="text" class="form-control form-control-sm" name="fax" id="fax" value="{{ $vendor->fax }}">
            </div>
            <div class="form-group">
                <label>No. Handphone</label>
                <input type="text" class="form-control form-control-sm" name="phone" id="phone" value="{{ $vendor->phone }}">
            </div>
            <div class="form-group">
                <label>Website</label>
                <input type="text" class="form-control form-control-sm" name="website" id="website" value="{{ $vendor->website }}">
            </div>
            {{-- <div class="form-group">
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
            </div> --}}
        </div>
    </form>

</div>
<div class="row">
    <div class="col-12 d-flex">
        <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white mx-auto">SAVE</button>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.select2').select2({
        theme: "bootstrap4",
        maximumDisplayOptionsLength:5,
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
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
            console.log(response)
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


</script>