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
    <h2 class="text-center">BUKU SEKOLAH</h2>
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