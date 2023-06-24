@extends('layouts.app')

@section('content')
    <h1><b>Halaman Tambah Menu</b></h1>
    <hr class="opacity-100 mb-5">

    <div class="col-lg-12 mx-3">
        <div class="card border border-black mx-auto" style="width: 320px;">
            <div class="card-body">
                <form action="" method="POST" class="mb-3" enctype="multipart/form-data">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control border border-black" name="nama_menu" placeholder="Nama Menu" autocomplete="off" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border border-black" name="deskripsi_menu" placeholder="Deskripsi Menu" autocomplete="off" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-black">Rp.</span>
                        <input type="number" class="form-control border-black" aria-label="Amount (to the nearest dollar)" placeholder="000">
                        <span class="input-group-text border-black">K</span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-10">
                                    <select class="form-select border border-black" aria-label="Default select example" name="menu_category">
                                        <option selected>Kategori</option>
                                        @foreach ($menu_category as $data)
                                            <option value="{{ $data->nama_category }}">{{ $data->nama_category }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- TAMBAH KATEGORI --}}
                                <div class="col-md-2">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="px-2 border border-black" style="padding : 6px;"> <b> + </b> </button>
                                </div>
                            
                        </div>
                    </div>
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control border border-black" id="inputGroupFile02">
                        <label class="input-group-text border border-black" for="inputGroupFile02">Gambar</label>
                    </div>
                    
                    <hr class="opacity-100">

                    <button class="btn btn-success w-100" type="submit"><b>Tambah Menu</b></button>
                </form>
            </div>
        </div>
    </div>

    <hr class="mt-5 opacity-100">
@endsection


{{-- MODAL TAMBAH KATEGORI MENU --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Kategori baru</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" method="POST">

            <div class="modal-body">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Kategori:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>  
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah Kategori</button>
            </div>

        </form>

        </div>
    </div>
</div>
{{-- END MODAL TAMBAH KATEGORI MENU --}}