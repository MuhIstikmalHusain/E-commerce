@extends('layouts.admin.main')

@section('section')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <section class="page-section" id="contact">
                        <!-- Contact Section Create -->
                        <form action="{{url ('/admin-pages')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="mb-3">
                                <label for="harga_produk" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" name="harga_produk" id="harga_produk" placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="mb-3">
                                <label for="gambar_produk" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" name="gambar_produk" id="gambar_produk" placeholder="Masukkan Gambar Produk">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                                <input type="text" class="form-control" name="deskripsi_produk" id="deskripsi_produk" placeholder="Masukkan Deskripsi Produk">
                            </div>
                            
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection