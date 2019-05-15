<!--  start -->
<table id="example" class="table table-sm table-striped table-bordered" style="width:100%">
    <thead class="bg-gradient-primary text-white fw-800">
        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nomor</th>
            <th>Nomor Surat</th>
            <th>Notaris</th>
            <th>Sumber Data</th>
            <th>Perubahan Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < 500; $i++): ?> <tr>
        <td class="text-center">
            <input class="mx-auto my-auto p-0" type="checkbox">
        </td>
        <td><?php echo e($i+1); ?></td>
        <td class="text-center">2011/04/25</td>
        <td>Edinburgh</td>
        <td>EPROC</td>
        <td class="text-center">2011/04/25</td>
        </tr>
        <?php endfor; ?>
    </tbody>
    <tfoot class="bg-gradient-primary text-white fw-800">
        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nomor</th>
            <th>Tanggal Surat</th>
            <th>Notaris</th>
            <th>Sumber Data</th>
            <th>Perubahan Tanggal</th>
        </tr>
    </tfoot>
</table>
<!-- end -->


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/MyaccountPartnerModule/Providers/../Resources/views/pages/izin.blade.php ENDPATH**/ ?>