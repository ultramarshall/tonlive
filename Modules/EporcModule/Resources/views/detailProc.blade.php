@extends('layout.blankMaster')
@section('head')

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

                    <ul class="nav nav-tabs-sm nav-tabs-outline nav-separated" role="tablist">
                        <li class="nav-item" onclick="get_view('perencanaan')">
                            <a class="nav-link nav-perencanaan" data-toggle="tab" href="#tab-view">Perencanaan</a>
                        </li>
                        <li class="nav-item" onclick="get_view('peserta')">
                            <a class="nav-link nav-peserta" data-toggle="tab" href="#tab-view">Peserta</a>
                        </li>
                        <li class="nav-item" onclick="get_view('diskusi')">
                            <a class="nav-link nav-diskusi" data-toggle="tab" href="#tab-view">Diskusi</a>
                        </li>
                        <li class="nav-item" onclick="get_view('jadwal')">
                            <a class="nav-link nav-jadwal" data-toggle="tab" href="#tab-view">Jadwal Pengadaan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content p-4" >
                <div class="tab-pane fade show active" id="tab-view" style="min-height: 500px"></div>
            </div>
            
        </div>
    </section>
@endsection

@section('footjs')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        active_pages = localStorage.getItem('pages-eproc');
        get_view(active_pages);
    });
    function get_view(pages) {
        console.log(pages)
        pages = (pages=='undifined')?pages:'perencanaan'
        localStorage.setItem('pages-eproc', pages);
        $('.nav-link').removeClass('active show')
        $('.nav-'+pages).addClass('active show')
       

        $.ajax({
            type: 'POST',
            url: "/eproc/pages",
            data: {id: {{ Request::segment(3) }}, pages: pages},
            beforeSend: function() {
                $('#tab-view').html('');
               /* $('#tab-view').block({
                    message: '<img src="{{URL::asset("images/loader.svg")}}" style="width:100px; margin-left: -50px; margin-top: -50px"/>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.2,
                        cursor: 'wait',
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'none'
                    }
                });*/
                
            },
            success: function(response) {
                $('#tab-view').html(response);
            },
            error: function(response) {
            }
        })
    }
</script>
@endsection











