@extends('layouts.app')

@section('content')
    <h1><b>Halaman Home</b></h1>
    <hr class="mb-5 opacity-100">

    <div class="col-lg-12">
        <div class="row mx-auto position-relative">
            
            <div class="col-lg-3 mb-3 me-0">
                <div class="card border border-black">
                    <div class="card-body">
                        <form class="d-flex " role="search">
                            <input class="form-control me-2 border border-black"" type="search" placeholder="Cari Makanan" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><b>Cari</b></button>
                        </form>
                        <hr class="opacity-100">
                        <select class="form-select border border-black"" aria-label="Default select example">
                            <option selected>Urutkan</option>
                            <option value="1">Terbaru</option>
                            <option value="2">Terlama</option>
                            <option value="3">Termahal</option>
                            <option value="3">Termurah</option>
                        </select>
                        <hr class="opacity-100">
                        <button class="btn btn-success w-100" type="submit"><b>Pesan</b></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="col-xs-12">
                    <div class="row mx-auto px-0 ps-2 product-card-grid">

                        {{-- satu block menu --}}
                        <div class="card mb-3 border border-black mx-2 product-card" style="width: 296px;">
                            <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" style="margin-top: 5%" alt="...">
                            <hr class="opacity-100">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <h5>
                                    <a type="button" class="card-title mb-4 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <b>Ramen Ayam Miso Sup</b>
                                    </a>
                                </h5>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Ramen Ayam Miso Sup</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="modal-body">
                                                            Deskripsi Ramen Ayam Miso Sup
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row text-center">
                                        <h5 class="col-6 card-title border border-black p-2 ">
                                            <a href="#" class="text-decoration-none text-success"><b>Ramen</b></a>
                                        </h5>
                                        <h5 class="col-6 card-title border border-black border-start-0 p-2 bg-success text-light">20K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- satu block menu --}}
                        <div class="card mb-3 border border-black mx-2 product-card" style="width: 296px;">
                            <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" style="margin-top: 5%" alt="...">
                            <hr class="opacity-100">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <h5>
                                    <a type="button" class="card-title mb-4 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <b>Ramen Ayam Miso Sup</b>
                                    </a>
                                </h5>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Ramen Ayam Miso Sup</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="modal-body">
                                                            Deskripsi Ramen Ayam Miso Sup
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row text-center">
                                        <h5 class="col-6 card-title border border-black p-2 ">
                                            <a href="#" class="text-decoration-none text-success"><b>Ramen</b></a>
                                        </h5>
                                        <h5 class="col-6 card-title border border-black border-start-0 p-2 bg-success text-light">20K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- satu block menu --}}
                        <div class="card mb-3 border border-black mx-2 product-card" style="width: 296px;">
                            <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" style="margin-top: 5%" alt="...">
                            <hr class="opacity-100">
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <h5>
                                    <a type="button" class="card-title mb-4 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <b>Ramen Ayam Miso Sup</b>
                                    </a>
                                </h5>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Ramen Ayam Miso Sup</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ asset('assets/img/ramen.jpg') }}" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="modal-body">
                                                            Deskripsi Ramen Ayam Miso Sup
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row text-center">
                                        <h5 class="col-6 card-title border border-black p-2 ">
                                            <a href="#" class="text-decoration-none text-success"><b>Ramen</b></a>
                                        </h5>
                                        <h5 class="col-6 card-title border border-black border-start-0 p-2 bg-success text-light">20K</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <hr class="mt-5 opacity-100">
@endsection