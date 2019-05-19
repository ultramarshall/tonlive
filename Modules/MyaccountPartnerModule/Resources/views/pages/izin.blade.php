<!--  start -->
<div class="row ">

    <div class="col-md-12 float-left border-bottom form-izin " style="display: none">
        <form class="col-md-12 bg-gradient-secondary pt-4 pb-1 mb-2" method="POST" action="/partner/save-izin" id="form" data-id>
            <div class="row">
                <div class="col-12">
                    
                        
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">izin usaha<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="izin_usaha" id="izin_usaha">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Nomor Surat <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="no_surat" id="no_surat">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Berlaku Sampai <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="berlaku_sampai" id="berlaku_sampai">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Instansi Pemberi <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="instansi" id="instansi">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Kualifikasi <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="kualifikasi" id="kualifikasi">
                        </div>

                   
                </div>
            </div>
            <div class="row">
                <div class="col-12  text-center pb-3">
                    <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white w-100px" id="btn-save">SAVE</button>
                    <button id="close" class="btn bg-gradient-danger btn-round text-white w-100px">CLOSE</button>
                </div>
            </div>

            <textarea name="old_data" cols="30" rows="10" class="col-12 fs-9 d-none" id="old_data">{{ (json_encode($izin)=='null')?'':json_encode($izin) }}</textarea>
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
                    <th>Izin Usaha</th>
                    <th>Nomor Surat</th>
                    <th>Berlaku Sampai</th>
                    <th>Instansi Pemberi</th>
                    <th>Kualifikasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset ($izin)
                    @foreach($izin as $i => $ta)
                        <tr row="{{ $i }}">

                            <td class="text-center">
                                <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                            </td>
                            <td>{{ $ta->izin_usaha }}</td>
                            <td>{{ $ta->no_surat }}</td>
                            <td>{{ $ta->berlaku_sampai }}</td>
                            <td>{{ $ta->instansi }}</td>
                            <td>{{ $ta->kualifikasi }}</td>
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
                    <th>Izin Usaha</th>
                    <th>Nomor Surat</th>
                    <th>Berlaku Sampai</th>
                    <th>Instansi Pemberi</th>
                    <th>Kualifikasi</th>
                    <th>Action</th>
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
        $('form').attr('action', '/partner/save-izin')
        $('.form-izin').fadeIn()
    })
    $(document).on('click', '#edit', function(){
        form = $('.form-izin');
        $('form').attr('action', '/partner/update-izin')
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
        $('.form-izin').fadeOut()
    })

    $('#form').on('change paste click', 'input, select, textarea', function(e){
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
