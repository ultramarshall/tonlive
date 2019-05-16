<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped shadow-sm">
            <tbody>
                <tr>
                    <th class="bg-primary text-white" width="200">Kode Tender</th>
                    <td colspan="3"><strong>{{ $tender->id }}</strong></td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Nama Tender</th>
                    <td colspan="3">
                        <strong>{{ $tender->tender_name }}</strong>

                    </td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Rencana Umum Pengadaan</th>
                    <td colspan="3">
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th width="80">Kode RUP</th>
                                    <th>Nama Paket</th>
                                    <th width="200">Sumber Dana</th>
                                </tr>
                                <tr>
                                    <td>{{ $tender->kode_rup }}</td>
                                    <td>{{ $tender->nama_paket }}</td>
                                    <td>{{ $tender->sumber_dana }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Tanggal Pembuatan</th>
                    <td colspan="3">{{ $tender->create_date }}</td>
                </tr>

                <tr>
                    <th class="bg-primary text-white">Keterangan</th>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Tahap Tender Saat ini</th>
                    <td colspan="3"><a href="/eproc4/lelang/6050119/jadwal" target="_blank">Pengumuman Pascakualifikasi [...]</a></td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Instansi</th>
                    <td colspan="3">{{ $tender->instansi }}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Satuan Kerja</th>
                    <td colspan="3">{{ $tender->satuan_kerja }}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Kategori</th>
                    <td colspan="3">
                        Pengadaan Barang
                    </td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Sistem Pengadaan</th>
                    <td colspan="3">Tender - Pascakualifikasi Satu File - Harga Terendah Sistem Gugur</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Tahun Anggaran</th>
                    <td colspan="3"> APBN 2019&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Nilai Pagu Paket</th>
                    <td>Rp {{ $tender->nilai_pagu_paket }}</td>

                    <th class="bg-primary text-white">Nilai HPS Paket</th>
                    <td>Rp {{ $tender->hps }}</td>

                </tr>
                <tr>
                    <th class="bg-primary text-white" rowspan="3">Jenis Kontrak</th>
                    <th class="bg-primary text-white">Cara Pembayaran</th>
                    <td colspan="2">{{ $tender->cara_pembayaran }}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Lokasi Pekerjaan</th>
                    <td colspan="3">
                        <ul>

                            <li>{{ $tender->lokasi_pekerjaan }}</li>

                        </ul>
                    </td>
                </tr>

                <tr>
                    <th class="bg-primary text-white">Kualifikasi Usaha</th>
                    <td colspan="3">Perusahaan Non Kecil</td>
                </tr>

                <tr>
                    <th class="bg-primary text-white">Syarat Kualifikasi</th>
                    <td colspan="3">
                        {!! $tender->qualification_terms !!}
                    </td>
                </tr>

                <tr>
                    <th class="bg-primary text-white">Peserta Tender</th>
                    <td colspan="3">{{ $tender->count_participants }}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>


