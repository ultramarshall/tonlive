<!--  start -->
<table id="example" class="table table-sm table-striped table-bordered" style="width:100%">
    <thead class="bg-gradient-primary text-white fw-800">
        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nama</th>
            <th>Nomor KTP</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Mulai</th>
            <th>Sampai</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < 500; $i++): ?> 
        <tr>
            <td class="text-center">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </td>
            <td>Rahmat</td>
            <td>123123123123123</td>
            <td>Jl. Kebun Jeruk 1,2,3,4,5</td>
            <td>Other</td>
            <td>12 Nov 2019</td>
            <td>Sekarang</td>
        </tr>
        <?php endfor; ?>
    </tbody>
    <tfoot class="bg-gradient-primary text-white fw-800">
        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nama</th>
            <th>Nomor KTP</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Mulai</th>
            <th>Sampai</th>
        </tr>
    </tfoot>
</table>
<!-- end -->


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/MyaccountPartnerModule/Providers/../Resources/views/pages/pengurus.blade.php ENDPATH**/ ?>