<!--  start -->
<div class="row mb-5">

    <div class="col-md-12 float-left border-bottom">
        <form action="post" action="" class="bg-gradient-secondary pt-4 pb-1 mb-2">
            <div class="form-group row">
                <label class="float-left text-right col-3">Pekerjaan<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Lokasi<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Instansi Penggunaan Barang/Jasa<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Alamat<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Tanggal Kontrak<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Nilai Kontrak<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Jenis<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
        </form>
    </div>
    
</div>
<div class="row">
    <div class="col-12">
        <table id="example" class="table table-sm table-striped table-bordered w-100">
            <thead class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input class="mx-auto my-auto p-0" type="checkbox">
                    </th>
                    <th>Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Instansi Penggunaan Barang/Jasa</th>
                    <th>Alamat</th>
                    <th>Tanggal Kontrak</th>
                    <th>Nilai Kontrak</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
            <tfoot class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input class="mx-auto my-auto p-0" type="checkbox">
                    </th>
                    <th>Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Instansi Penggunaan Barang/Jasa</th>
                    <th>Alamat</th>
                    <th>Tanggal Kontrak</th>
                    <th>Nilai Kontrak</th>
                    <th>Jenis</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
