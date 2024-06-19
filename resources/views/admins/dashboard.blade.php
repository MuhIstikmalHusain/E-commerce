@extends('layouts.admin.main')

@section('section')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-4">
                <div class="card z-index-2 h-100">
                  <div class="card-header pb-0 pt-3 bg-transparent">
                    <div class="mb-2 mt-3">
                      <a href="{{url ('/create')}}" class="btn btn-primary">Tambah Produk</a>
                    </div>
                      <div class="table-responsive">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Harga Produk</th>
                          <th scope="col">Gambar Produk</th>
                          <th scope="col">Deskripsi Produk</th>
                          <th scope="col">Aksi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($produk as $p)
                        <tr>
                          <td >{{$p->nama_produk}}</td>
                          <td>Rp. {{$p->harga_produk}}</td>
                          <td>
                            <img src="{{asset ('storage/photo/'.$p->gambar_produk)}}" width="120px" height="100px">
                          </td>
                          <td >{{$p->deskripsi_produk}}</td>
                          <td>
                            <a href="{{url('/edit/'.$p->id)}}"class="btn btn-primary">Edit</a>
                            <a href="{{url('/destroy/'.$p->id)}}"class="btn btn-danger">Hapus</a>
                          </td>
                          
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align:center">Tidak ada data</td>
                        </tr>                        
                        @endforelse
                      </tbody>
                    </table>
                </div>
                  </div>
                  
                </div>
              
            </div>
        </div>
    </div>
@endsection