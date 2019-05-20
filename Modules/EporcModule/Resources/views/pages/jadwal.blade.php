

<div class="row mt-5">
    <div class="col-lg-5 mx-auto table-responsive">
            <table class="table table-hover table-condensed table-bordered table-striped shadow-sm">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th class="fw-600" width="10">Tanggal</th>
                        <th class="fw-600">Subjek</th>
                        <th class="fw-600">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="bg-pale-secondary">
                	@foreach ($jadwal as $j)
                		@php
                		if( Carbon::today() == Carbon::parse($j->date_schedule) )
							$color = 'text-white bg-gradient-success fw-600';
                		else if( Carbon::today() > Carbon::parse($j->date_schedule) )
							$color = 'text-danger bg-pale-danger fw-600';
						else
							$color = 'bg-white fw-600';
						@endphp
                		<tr class="{{ $color }}">
                			<td width="100px">{{date('d-m-Y', strtotime($j->date_schedule)) }}</td>
                			<td>{{ $j->subject }}</td>
                			<td>{{ $j->description }}</td>
                		</tr>
                	@endforeach
                </tbody>
            </table>
    </div>
</div>

<div class="row">
	<div class="col-12 m-0">
		<div class="square py-3 px-5">
			<div class="i-square bg-pale-danger shadow" data-label="Jadwal sudah berakhir."></div>
			<div class="i-square bg-gradient-success shadow" data-label="Jadwal terakhir hari ini."></div>
			<div class="i-square bg-white shadow" data-label="Jadwal belum mulai."></div>
		</div>
	</div>
</div>
<style>
	.square {
		border: 2px solid #eee;
		width: 300px
	}
	.i-square {
		width: 20px;
		height: 20px;
		border-radius: 2px;
		position: relative;
		margin-bottom: 8px;
		border: 2px solid #eee;
	}
	.i-square:before {
		content: attr(data-label);
		position: absolute;
		left: 24px; top: 0;
		line-height: 16px;
		min-width: 200px;
		font-size: 12px;
		font-weight: 500
	}
</style>