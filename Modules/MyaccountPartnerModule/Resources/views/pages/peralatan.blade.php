<!--  start -->
<div class="row mb-5">

    <div class="col-md-12 float-left border-bottom">
        <form class="col-md-12 bg-gradient-secondary pt-4 pb-1 mb-2" method="POST" action="/partner/save-peralatan" id="form">

            <div class="form-group row">
                <label class="float-left text-right col-3">Nama Alat<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="nama_alat" id="nama_alat">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Jumlah <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="jumlah" id="jumlah">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Kapasitas <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="kapasitas" id="kapasitas">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Merk/Type <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="merk" id="merk">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Kondisi <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="kondisi" id="kondisi">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Tahun Pembuatan <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="tahun_pembuatan" id="tahun_pembuatan">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Lokasi Sekarang <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="lokasi_sekarang" id="lokasi_sekarang">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Bukti Kepemilikan <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="bukti_kepemilikan" id="bukti_kepemilikan">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Keterangan <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="keterangan" id="keterangan">
            </div>
            <textarea name="old_data" cols="30" rows="10" class="col-12 fs-9 d-none" id="old_data">{{ (json_encode($peralatan)=='null')?'':json_encode($peralatan) }}</textarea>
        </form>
<div class="row py-2">
    <div class="col-12 d-flex">
        <button type="submit" form="form" class="btn bg-gradient-primary btn-round text-white mx-auto">SAVE</button>
    </div>
</div>
    </div>
    
</div>
<div class="row">
    <div class="w-100" style="overflow-y: auto !important;">
        <table id="example" class="table table-sm table-striped table-bordered w-100">
            <thead class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input name="check[]" id="check_all" class="mx-auto my-auto p-0" type="checkbox">
                    </th>
                    <th class="w-100px">Nama Alat</th>
                    <th>Jumlah</th>
                    <th>Kapasitas</th>
                    <th>Merk/Type</th>
                    <th>Kondisi</th>
                    <th>Tahun Pembuatan</th>
                    <th>Lokasi Sekarang</th>
                    <th>Bukti Kepemilikan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peralatan as $key => $p)
                    <tr>
                        <td class="text-center">
                            <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                        </td>
                        <td>{{ $p->nama_alat }}</td>
                        <td width="50">{{ $p->jumlah }}</td>
                        <td>{{ $p->kapasitas }}</td>
                        <td>{{ $p->merk }}</td>
                        <td>{{ $p->kondisi }}</td>
                        <td>{{ $p->tahun_pembuatan }}</td>
                        <td>{{ $p->lokasi_sekarang }}</td>
                        <td>{{ $p->bukti_kepemilikan }}</td>
                        <td>{{ $p->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input name="check[]" id="check" class="mx-auto my-auto p-0" type="checkbox">
                    </th>
                    <th>Nama Alat</th>
                    <th>Jumlah</th>
                    <th>Kapasitas</th>
                    <th>Merk/Type</th>
                    <th>Kondisi</th>
                    <th>Tahun Pembuatan</th>
                    <th>Lokasi Sekarang</th>
                    <th>Bukti Kepemilikan</th>
                    <th>Keterangan</th>
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
</script>
