<!--  start -->
<div class="row ">

    <div class="col-md-12 float-left border-bottom form-pengurus " style="display: none">
        <form class="col-md-12 bg-gradient-secondary pt-4 pb-1 mb-2" method="POST" action="/partner/save-pengurus" id="form" data-id>
            <div class="row">
                <div class="col-12">
                    
                        
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Nama<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="nama" id="nama">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">No KTP <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="no_ktp" id="no_ktp">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Alamat <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="alamat" id="alamat">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Jabatan <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="jabatan" id="jabatan">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Mulai <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="mulai" id="mulai">
                        </div>
                        <div class="form-group row">
                            <label class="float-left col-4 text-right">Sampai <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control form-control-sm col-6 float-left" name="sampai" id="sampai">
                        </div>

                   
                </div>
            </div>
            <div class="row">
                <div class="col-12  text-center pb-3">
                    <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white w-100px" id="btn-save">SAVE</button>
                    <button id="close" class="btn bg-gradient-danger btn-round text-white w-100px">CLOSE</button>
                </div>
            </div>

            <textarea name="old_data" cols="30" rows="10" class="col-12 fs-9 d-none" id="old_data">{{ (json_encode($pengurus)=='null')?'':json_encode($pengurus) }}</textarea>
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
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Mulai</th>
                    <th>Sampai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset ($pengurus)
                    @foreach($pengurus as $i => $ta)
                        <tr row="{{ $i }}">

                            <td class="text-center">
                                <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                            </td>
                            <td>{{ $ta->nama }}</td>
                            <td>{{ $ta->no_ktp }}</td>
                            <td>{{ $ta->alamat }}</td>
                            <td>{{ $ta->jabatan }}</td>
                            <td>{{ $ta->mulai }}</td>
                            <td>{{ $ta->sampai }}</td>
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
                    <th>Nama</th>
                    <th>No KTP</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Mulai</th>
                    <th>Sampai</th>
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
        $('form').attr('action', '/partner/save-pengurus')
        $('.form-pengurus').fadeIn()
    })
    $(document).on('click', '#edit', function(){
        form = $('.form-pengurus');
        $('form').attr('action', '/partner/update-pengurus')
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
        $('.form-pengurus').fadeOut()
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
