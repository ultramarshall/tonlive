<!--  start -->
<div class="row ">

    <div class="col-md-12 float-left border-bottom form-peralatan " style="display: none">
        <form class="col-md-12 bg-gradient-secondary pt-4 pb-1 mb-2" method="POST" action="/partner/save-peralatan" id="form" data-id>
            <div class="row">
                <div class="col-12">
                    
                    <div class="col-6 float-left">
                        
                        <div class="form-group row">
                            <label class="float-left col-4">Nama Alat<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="nama_alat" id="nama_alat">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Jumlah <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="jumlah" id="jumlah">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Kapasitas <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="kapasitas" id="kapasitas">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Merk/Type <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="merk" id="merk">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Kondisi <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="kondisi" id="kondisi">
                        </div>

                    </div>

                    <div class="col-6 float-left">
                        <div class="form-group row">
                            <label class="float-left col-5">Tahun Pembuatan <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="tahun_pembuatan" id="tahun_pembuatan">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Lokasi Sekarang <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="lokasi_sekarang" id="lokasi_sekarang">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Bukti Kepemilikan <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="bukti_kepemilikan" id="bukti_kepemilikan">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Keterangan <sup class="text-danger">*</sup></label>
                            <textarea class="form-control form-control-sm col-7 float-left" name="keterangan" id="keterangan" cols="30" rows="3"></textarea>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  text-center pb-3">
                    <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white w-100px" id="btn-save">SAVE</button>
                    <button id="close" class="btn bg-gradient-danger btn-round text-white w-100px">CLOSE</button>
                </div>
            </div>

            <textarea name="old_data" cols="30" rows="10" class="col-12 fs-9 d-none" id="old_data">{{-- {{ (json_encode($peralatan)=='null')?'':json_encode($peralatan) }} --}}</textarea>
        </form>
    </div>
    
</div>
<div class="row">
    <div class="col pb-3 pt-2 text-right">
        <button class="btn btn-xs rounded-sm bg-gradient-primary text-white" id="add">add</button>
        <button class="btn btn-xs rounded-sm bg-gradient-danger text-white" id="delete">delete</button>
    </div>
</div>
<div class="row">
    <div class="w-100" style="overflow-y: auto !important;">
        <table id="example" class="table table-sm table-striped table-bordered w-100">
            <thead class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input name="check[]" id="check_all" class=" my-auto p-0" type="checkbox" style="margin-left: 15px">
                    </th>
                    <th class="w-100px">Nama Alat</th>
                    <th>Jumlah</th>
                    <th>Lokasi Sekarang</th>
                    <th>Bukti Kepemilikan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($pengalaman as $i => $p) --}}
                    <tr row="{{-- {{ $i }} --}}">

                        <td class="text-center">
                            <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                        </td>
                        <td>{{-- {{ $p->nama_alat }} --}}</td>
                        <td class="text-center" width="50">{{-- {{ $p->jumlah }} --}}</td>
                        <td>{{-- {{ $p->lokasi_sekarang }} --}}</td>
                        <td>{{-- {{ $p->bukti_kepemilikan }} --}}</td>
                        <td>{{-- {{ $p->keterangan }} --}}</td>
                        <td>
                            <button class="btn btn-xs bg-gradient-primary text-white" id="edit" data-id="{{-- {{ $i }} --}}">edit</button>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
            <tfoot class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                    </th>
                    <th>Nama Alat</th>
                    <th>Jumlah</th>
                    <th>Lokasi Sekarang</th>
                    <th>Bukti Kepemilikan</th>
                    <th>Keterangan</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#check_all').on('click', function(){
        if($(this).prop('checked') == true)
            $('input[type=checkbox]').prop('checked', true)
        else
            $('input[type=checkbox]').prop('checked', false)
    })
    $(document).on('click', '#add', function(){
        $('form').attr('action', '/partner/save-peralatan')
        $('.form-peralatan').fadeIn()
    })
    $(document).on('click', '#edit', function(){
        form = $('.form-peralatan');
        $('form').attr('action', '/partner/update-peralatan')
        id = $(this).attr('data-id');
        old_data = JSON.parse($('#old_data').val())[id];
        form.fadeOut();
        jQuery.each(old_data, function(key, data) { $('#'+key).val(data) });
        setTimeout(function(){ form.fadeIn(); }, 600);
        $('#form').attr('data-id', id);
    })
    $(document).on('click', '#close', function(e){
        e.preventDefault();
        $('form').attr('action', '#')
        $('#form').attr('data-id', '');
        $('.form-peralatan').fadeOut()
    })

    $('#form').on('keyup change paste', 'input, select, textarea', function(e){
        var form = $('#form');
        var table = $('#example')
        var id = parseInt(form.attr('data-id'));
        var data = form.serializeArray();
        var old_data = JSON.parse($('#old_data').val());
        delete data[9];
        var result = { };
        $.each(data, function() {
            result[this.name] = this.value;
        });

        if (isNaN(id)) {
            return false;
        } else {
            old_data[id] = result;
            $('#old_data').val(JSON.stringify(old_data))
        }
        return false;
    });
</script>
