<!--  start -->
<div class="row mb-5">

    <div class="col-md-12 float-left border-bottom">
        <form action="post" action="" class="bg-gradient-secondary pt-4 pb-1 mb-2">
            <div class="form-group row">
                <label class="float-left text-right col-3">Nama Alat<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Jumlah <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Kapasitas <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Merk/Type <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Kondisi <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Tahun Pembuatan <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Lokasi Sekarang <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Bukti Kepemilikan <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control form-control-sm col-6 float-left" name="id" id="id">
            </div>
            <div class="form-group row">
                <label class="float-left text-right col-3">Keterangan <sup class="text-danger">*</sup></label>
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
            </thead>
            <tbody>
                
            </tbody>
            <tfoot class="bg-gradient-primary text-white fw-800">
                <tr>
                    <th class="text-center" width="50px">
                        <input class="mx-auto my-auto p-0" type="checkbox">
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
    } );
</script>
