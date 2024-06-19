@extends('layouts.dashboard.main')

@section('konten-produk')

    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">    
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Your Products Are Great.</h1>
                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="dashboard/images/banner-image.png" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-wrap align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">Technology Hack You Won't Get</h1>
                    <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="image-holder">
                    <img src="dashboard/images/banner-image.png" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-prev">
        <svg class="chevron-left">
          <use xlink:href="#chevron-left" />
        </svg>
      </div>
      <div class="swiper-icon swiper-arrow swiper-arrow-next">
        <svg class="chevron-right">
          <use xlink:href="#chevron-right" />
        </svg>
      </div>
    </section>

    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Gratis Ongkir</h3>
                <p>Dapatkan Promo gratis ongkir ke seluruh Indonesia.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Kualitas Terbaik</h3>
                <p>Produk-produk dengan Kualitas Terbaik.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Penawaran Harian</h3>
                <p>Dapatkan Penawaran Spesial dengan Tiap Harinya.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark"> 100% Pembayaran Aman.</h3>
                <p>Pembayaran terjamin Aman 100%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile Produk -->
    <section id="mobile-products" class="bg-light-blue overflow-hidden mt-5 padding-xlarge">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Products</h2><br>
          </div>
          <hr>
        @forelse ($data as $p)
          <div class="col-md-4 mb-3 mt-3">
            <div class="card" style="width: 18rem" >
              <img src = "{{asset ('storage/photo/'.$p->gambar_produk)}}" height="200rem">
              <div class="card-body">
                  <h5 class="card-title">{{$p->nama_produk}}</h5>
                  <h6 class="card-text">
                      <strong>Harga: Rp. </strong>{{$p->harga_produk}}
                  </h6>
                  <h6 class="card-text">
                      <strong>Keterngan: </strong><br>
                      {{$p->deskripsi_produk}}
                  </h6>

                  <a href="#" class="btn btn-primary">Pesan </a>
              </div>
            </div>
          </div>
        @empty
            <tr>
                <td colspan="4" style="text-align:center">Tidak ada data</td>
            </tr>                        
        @endforelse
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>


@endsection