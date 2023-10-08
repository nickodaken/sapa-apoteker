@extends('landing.layouts')
@section('content')
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-6 text-white mb-4 animated slideInRight">Chat Apoteker</h1>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('landing/img/carousel-apoteker.png') }}" alt=""
                        style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container-fluid py-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" data-wow-delay="0.3s">
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('landing/img/carousel-apoteker.jpeg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apt. Mirna Wulansari</h5>
                            <p class="card-text">Universitas Hasannudin, Makassar</p>
                            <p><span class="badge rounded-pill bg-secondary"><i class="bi bi-bag-fill"></i> 5
                                    Tahun</span></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <b>Rp. 20.000</b>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><i class="bi bi-circle-fill text-success"></i>
                                Online</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('landing/img/carousel-apoteker.jpeg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apt. Mirna Wulansari</h5>
                            <p class="card-text">Universitas Hasannudin, Makassar</p>
                            <p><span class="badge rounded-pill bg-secondary"><i class="bi bi-bag-fill"></i> 5
                                    Tahun</span></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <b>Rp. 20.000</b>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" disabled>Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><i class="bi bi-circle-fill text-danger"></i>
                                Offline</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('landing/img/carousel-apoteker.jpeg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apt. Mirna Wulansari</h5>
                            <p class="card-text">Universitas Hasannudin, Makassar</p>
                            <p><span class="badge rounded-pill bg-secondary"><i class="bi bi-bag-fill"></i> 5
                                    Tahun</span></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <b>Rp. 20.000</b>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><i class="bi bi-circle-fill text-success"></i>
                                Online</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('landing/img/carousel-apoteker.jpeg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apt. Mirna Wulansari</h5>
                            <p class="card-text">Universitas Hasannudin, Makassar</p>
                            <p><span class="badge rounded-pill bg-secondary"><i class="bi bi-bag-fill"></i> 5
                                    Tahun</span></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <b>Rp. 20.000</b>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" disabled>Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><i class="bi bi-circle-fill text-danger"></i>
                                Offline</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
