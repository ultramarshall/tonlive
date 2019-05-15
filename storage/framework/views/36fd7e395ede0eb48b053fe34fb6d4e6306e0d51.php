<!--  start -->
<table id="example" class="table table-sm table-striped table-bordered" style="width:100%">
    <thead class="bg-gradient-primary text-white fw-800">
        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan</th>
            <th>Pengalaman Kerja (Tahun)</th>
            <th>Profesi / Keahlian</th>
        </tr>
    </thead>
    <tbody style="min-height: 500px">
        
    </tbody>


    <tfoot class="bg-gradient-primary text-white fw-800">

        <tr>
            <th class="text-center" width="50px">
                <input class="mx-auto my-auto p-0" type="checkbox">
            </th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan</th>
            <th>Pengalaman Kerja (Tahun)</th>
            <th>Profesi / Keahlian</th>
        </tr>
    </tfoot>
</table>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $(document).find('.dataTables_empty').addClass('py-12')
    });
</script>
<?php /**PATH /Users/marshall/Desktop/ton/public_html/Modules/MyaccountPartnerModule/Providers/../Resources/views/pages/tenaga-ahli.blade.php ENDPATH**/ ?>