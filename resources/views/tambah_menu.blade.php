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
                        <select class="form-select border border-black" aria-label="Default select example" name="menu_category">
                            <option selected>Kategori</option>
                            <option value="Sate">Sate</option>
                            <option value="Jajanan Ringan">Jajanan Ringan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
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