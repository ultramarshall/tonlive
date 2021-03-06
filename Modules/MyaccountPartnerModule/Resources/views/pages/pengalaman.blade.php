<!--  start -->
<div class="row ">

    <div class="col-md-12 float-left border-bottom form-pengalaman " style="display: none">
        <form class="col-md-12 bg-gradient-secondary pt-4 pb-1 mb-2" method="POST" action="/partner/save-pengalaman" id="form" data-id>
            <div class="row">
                <div class="col-12">
                    
                    <div class="col-6 float-left">
                        <div class="form-group row">
                            <label class="float-left col-4">Pekerjaan<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="pekerjaan" id="pekerjaan">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Lokasi <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="lokasi" id="lokasi">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Instansi <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="instansi" id="instansi">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4">Alamat <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="alamat" id="alamat">
                        </div>

                    </div>

                    <div class="col-6 float-left">
                        <div class="form-group row">
                            <label class="float-left col-4">Mulai Kontrak <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="tanggal_kontrak" id="tanggal_kontrak">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Selesai Kontrak <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="selesai_kontrak" id="selesai_kontrak">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Nilai Kontrak <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="nilai_kontrak" id="nilai_kontrak">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-5">Jenis Kontrak <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-7 float-left" name="jenis_kontrak" id="jenis_kontrak">
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

            <textarea name="old_data" cols="30" rows="10" class="col-12 fs-9 d-none" id="old_data">{{ (json_encode($pengalaman)=='null')?'':json_encode($pengalaman) }}</textarea>
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
                    <th class="w-100px">Nama Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Instansi</th>
                    <th>Mulai Kontrak</th>
                    <th>Selesai Kontrak</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset ($pengalaman)
                    @foreach($pengalaman as $i => $p)
                        <tr row="{{ $i }}">

                            <td class="text-center">
                                <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                            </td>
                            <td>{{ $p->pekerjaan }}</td>
                            <td>{{ $p->lokasi }}</td>
                            <td>{{ $p->instansi }}</td>
                            <td>{{ $p->tanggal_kontrak }}</td>
                            <td>{{ $p->selesai_kontrak }}</td>
                            <td>
                                <button class="btn btn-xs bg-gradient-primary text-white" id="edit" data-id="{{ $i }}">edit</button>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
            <tfoot class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input name="check[]" id="check_all" class=" my-auto p-0" type="checkbox">
                    </th>
                    <th class="w-100px">Nama Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Instansi</th>
                    <th>Mulai Kontrak</th>
                    <th>Selesai Kontrak</th>
                    <th>Action</th>
                </tr>
            </tfoot></table>
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
        $('form').attr('action', '/partner/save-pengalaman')
        $('.form-pengalaman').fadeIn()
    })
    $(document).on('click', '#edit', function(){
        form = $('.form-pengalaman');
        $('form').attr('action', '/partner/update-pengalaman')
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
        $('.form-pengalaman').fadeOut()
    })

    $('#form').on('change paste', 'input, select, textarea', function(e){
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
