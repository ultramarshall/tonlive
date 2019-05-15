@extends('layout.master')

@section('content')
<header class="header py-8 text-center text-white bg-dark">
        <canvas class="constellation" width="1680" height="920"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="display-4">Berita terkini</h1>
                
                </div>
            </div>
        </div>
    </header>
<section class="  bg-gray">
        <div class="section">
            <div class="container">
               
                <div class="row mt-5">
                    <div class="col-lg-6 mt-6">
                        <div class="col-lg-12 hover-shadow-6 bg-white ">
                            <div class="row">
                                <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                    
                                </div>
                                <div class="col-md-7 p-0">
                                    <div class="p-2 pt-6 pl-5">
                                        <small class="fw-500 text-dark mb-4">
                                  04 Dec 2018                              </small>
                                        <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                        <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                        <br>
                                        <br>
                                        <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-6">
                            <div class="col-lg-12 hover-shadow-6 bg-white ">
                                <div class="row">
                                    <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                        
                                    </div>
                                    <div class="col-md-7 p-0">
                                        <div class="p-2 pt-6 pl-5">
                                            <small class="fw-500 text-dark mb-4">
                                      04 Dec 2018                              </small>
                                            <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                            <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                            <br>
                                            <br>
                                            <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-6">
                                <div class="col-lg-12 hover-shadow-6 bg-white ">
                                    <div class="row">
                                        <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                            
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="p-2 pt-6 pl-5">
                                                <small class="fw-500 text-dark mb-4">
                                          04 Dec 2018                              </small>
                                                <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                                <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                                <br>
                                                <br>
                                                <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-6">
                                    <div class="col-lg-12 hover-shadow-6 bg-white ">
                                        <div class="row">
                                            <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                                
                                            </div>
                                            <div class="col-md-7 p-0">
                                                <div class="p-2 pt-6 pl-5">
                                                    <small class="fw-500 text-dark mb-4">
                                              04 Dec 2018                              </small>
                                                    <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                                    <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                                    <br>
                                                    <br>
                                                    <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-6">
                                        <div class="col-lg-12 hover-shadow-6 bg-white ">
                                            <div class="row">
                                                <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                                    
                                                </div>
                                                <div class="col-md-7 p-0">
                                                    <div class="p-2 pt-6 pl-5">
                                                        <small class="fw-500 text-dark mb-4">
                                                  04 Dec 2018                              </small>
                                                        <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                                        <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                                        <br>
                                                        <br>
                                                        <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-6">
                                            <div class="col-lg-12 hover-shadow-6 bg-white ">
                                                <div class="row">
                                                    <div class="col-md-5 pl-0 pr-0" style="background-image:url('https://i2.wp.com/www.senayanpost.com/wp-content/uploads/2018/11/jk-01.jpeg?resize=780%2C405&ssl=1');background-size:cover;min-height:250px ;background-position:center;">
                                                        
                                                    </div>
                                                    <div class="col-md-7 p-0">
                                                        <div class="p-2 pt-6 pl-5">
                                                            <small class="fw-500 text-dark mb-4">
                                                      04 Dec 2018                              </small>
                                                            <p class="lead ls-1 fw-500 text-dark">Why Massages Really…</p>
                                                            <small class="text-justify">Scientific studies have shown benefits of massage therapy for insomnia, multiple sclerosis, anxiety, cancer pain,…. </small>
                                                            <br>
                                                            <br>
                                                            <a class="text-dark fw-600 small text-uppercase" href="#" data-toggle="offcanvas" data-target="#offcanvas-news" onclick="showblog(1)">Read More <span class="pl-1">⟶</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                </div>
                <!--end of row-->
    
                <div class="row mt-8">
                    <div class="col-lg-1 mx-auto">
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>
@stop
