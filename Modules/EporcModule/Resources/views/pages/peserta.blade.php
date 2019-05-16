<div class="row mt-5">
    <div class="col-lg-5 mx-auto table-responsive">
            <table class="table table-condensed table-bordered table-striped shadow-sm">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th class="fw-600" width="10">No</th>
                        <th class="fw-600"> Peserta</th>
                    </tr>
                </thead>
                <tbody class="bg-pale-secondary">
                    @foreach($peserta as $i => $p)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td nowrap=""> {{ $p->company_name }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
