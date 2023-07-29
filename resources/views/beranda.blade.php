@extends('home')

@section('css')
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">


<script>
 document.addEventListener('DOMContentLoaded', function () {
      new Splide('#banner-beranda', {
        perPage: 1,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
      }).mount();
    });

</script>
@endsection

@section('content')

    {{-- SD --}}
    <div id="banner-beranda" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="img/slider/slide (1).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (2).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (3).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (4).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (5).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (6).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (7).png" class="d-block w-100"></li>
                <li class="splide__slide"><img src="img/slider/slide (8).png" class="d-block w-100"></li>
            </ul>
        </div>
    </div>
    {{-- END --}}

<div class="container pt-4 pb-4">
    <h2 class="text-center text-primary">BUKU SEKOLAH</h2>
    <div class="row">
      <div class="col-md-6 order-md-1 order-last d-flex justify-content-center">
        <div class="card border-0 shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title fw-bolder text-primary">BUKU ECERAN HARGA TERTINGGI</h5>
            <p class="card-text">
              Buku pelajaran sekolah untuk jenjang SD-SMP-SMA dengan Harga Eceran Tertinggi dari pemerintah sesuai dengan SK BSKAP Kemendikbudristek RI No. 020/HP/P/2022
            </p>
            <a href="{{url('buku')}}" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-first order-md-2">
        <div class="mb-4 mt-4 d-flex justify-content-center">
          <div class="bg-image"style="max-width: 10rem;">
            <img src="img/buku/het/SD/1.png" style="width: 10rem" />
          </div>
          <div class="bg-image" style="max-width: 10rem;">
            <img src="img/buku/het/SMP/1.png"  style="width: 10rem" />
          </div>
          <div class="bg-image" style="max-width: 10rem;">
            <img src="img/buku/het/SMP/1.png"  style="width: 10rem" />
          </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-6 order-md-1 order-last d-flex justify-content-center">
    <div class="card border-0 shadow p-3 mb-5 bg-body rounded" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title fw-bolder text-primary">BUKU PELAJARAN SEKOLAH SAE SMART</h5>
        <p class="card-text">
          Buku pelajaran sekolah dengan Kurikulum Merdeka untuk jenjang SD-SMP-SMA yang disusun oleh Tim Penulis SAE SMART dan diterbitkan oleh CV. SAE GROUP
        </p>
        <a href="{{url('buku')}}" class="btn btn-primary">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 order-first order-md-2">
    <div class="mb-4 mt-4 d-flex justify-content-center">
      <div class="bg-image"style="max-width: 10rem;">
        <img src="img/buku/pls/keagamaan/SD/agama (1).png" style="width: 10rem" />
      </div>
      <div class="bg-image" style="max-width: 10rem;">
        <img src="img/buku/pls/mulok/SD/mulok (1).png" style="width: 10rem" />
      </div>
      <div class="bg-image" style="max-width: 10rem;">
        <img src="img/buku/pls/pendamping/SD/pdpp (1).png" style="width: 10rem" />
      </div>
    </div>
  
</div>
</div>
</div>

<div class="pt-4 pb-4 text-center" style="background-color: rgb(41, 145, 235);">
    <h2 class="text-white">KATALOG</h2>
    <div class="mb-4 mt-4 d-flex justify-content-center">
            <div class="bg-image me-2" data-mdb-ripple-color="light"
              style="max-width: 10rem;">
              <img src="img/katalog/baru/1. KATALOG BUKU HET - PAUD-1.png" class="w-100" alt="Louvre" />
            </div>
            <div class="bg-image ms-3" data-mdb-ripple-color="light"
              style="max-width: 10rem;">
              <img src="img/katalog/baru/1. KATALOG BUKU REGULER SAE - SD-1.png" class="w-100" alt="Louvre" />
            </div>
    </div>
    <a class="btn btn-light text-primary shadow" href="{{url('katalog/')}}">Lihat Selengkapnya</a>
</div>
@endsection