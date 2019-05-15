@extends('layout.blankMaster')
@section('head')

@endsection
@section('footjs')

@endsection
@section('content')
<header class="header py-8 text-center text-white bg-dark pb-2">
        <canvas class="constellation" width="1680" height="920"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="row">
                        <div class="col-lg-12">
                                <h1 class="display-4">Pengadaan Aplikasi e-procurement</h1>
                                <br/>
                                <a href="/eproc/list-procurement/" class="text-center btn btn-white btn-lg">Daftar tender ini</a><br/>
                               
                        </div>
                    </div>

                    <div class="row mt-5">
                            <div class="col-lg-12">
                                    <a href="/eproc/list-procurement"><small >Kembali</small></a>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid bg-primary text-white">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="/eproc/list-procurement/">e-procurement</a></li>
                            <li class="breadcrumb-item active"><a href="/">Pengadaan Aplikasi e-procurment</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pt-5 h-100vh bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Perencanaan</h3>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <ul class="nav nav-tabs-outline nav-separated">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">perencanaan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="">Peserta</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Diskusi</a>
                                      </li>
                                      <li class="nav-item">
                                            <a class="nav-link" href="#">Jadwal Pengadaan</a>
                                          </li>
                              </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered table-responsive  table-striped">
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
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>21411308</td>
                                                <td>Pengadaan dan Pengembangan Aplikasi E-Audit</td>
                                                <td>APBN</td>
                                                <td></td>
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
                                <td>Rp {{ number_format($tender->nilai_pagu_paket,0, ',' , '.') }}</td>
    
                                <th class="bg-primary text-white">Nilai HPS Paket</th>
                                <td>Rp {{ number_format($tender->hps,0, ',' , '.') }}</td>
    
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
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th>Izin Usaha</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="table table-condensed">
                                                        <tbody>
                                                            <tr>
                                                                <td>Jenis Ijin</td>
                                                                <td>Klasifikasi</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Badan usaha dengan kegiatan usahanya dalam Penyediaan Aplikasi di bidang Teknologi Informasi</td>
                                                                <td>Badan usaha dengan kegiatan usahanya dalam Penyediaan Aplikasi di bidang Teknologi Informasi</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Memiliki NPWP</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Telah Melunasi Kewajiban Pajak Tahun Terakhir</b>
                                                    <p>Pelunasan SPT tahun 2018 atau 2017 jika SPT 2018 belum ada.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Yang bersangkutan dan manajemennya tidak dalam pengawasan pengadilan, tidak pailit, dan kegiatan usahanya tidak sedang dihentikan</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tidak Masuk dalam Daftar Hitam</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Memiliki  pengalaman penyediaan aplikasi di bidang teknologi informasi paling kurang 1 pekerjaan dalam kurun waktu 1 tahun terakhir</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Memiliki pengalaman pekerjaan sejenis dengan kompleksitas serupa dalam 3 tahun terakhir</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Memiliki pengalaman dalam implementasi penyediaan perangkat lunak di Aparat Pengawasan Intern Pemerintah APIP maupun Satuan Pengawasan Intern Badang Usaha Milik Negara SPI BUMN</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
        </div>
    </section>
@endsection
