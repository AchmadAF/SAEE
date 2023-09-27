@extends('home')

@section('css')
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
@endsection

@section('content')

<div class="container mb-5 mt-5">
<div class="row">
  
  <div class="d-flex justify-content-center col-md">
    <div class="bg-image hover-overlay ripple m-3  rounded" data-mdb-ripple-color="light"
      style="max-width: 30rem;">
      <img src="img/buku/list/sd.png" class="w-100" alt="Louvre" />
      {{-- <a href="https://drive.google.com/file/d/1MG7n5JIuKg7u30YoAtvtTMG4KF8NCmo6/view?usp=sharing" target="_blank">
        <div class="mask text-light d-flex justify-content-center flex-column text-center"
          style="background-color: rgba(0, 0, 0, 0.7)">
          <strong class="m-0 fs-6 "></strong>
        </div>
      </a> --}}
    </div>
  </div>
  <div class="col">
    <h1 class="fw-bold m-0">Buku Pesantren Ramadhan</h1>
    <p class="fs-3 fw-lighter m-0">untuk SD/MI</p>
    <p class="fs-4 fw-bold text-danger m-0">Rp -</p>
    <p class="m-0 mt-2">Penulis</p>
    <p class="fw-bold fs-5">Isdana Zulfah, M.Pd.</p>
    <p class="m-0">ISBN</p>
    <p class="fw-bold fs-5">-</p>
    <p class="m-0">Cover</p>
    <p class="fw-bold fs-5">Soft Cover</p>
    <p class="m-0">Halaman</p>
    <p class="fw-bold fs-5">56 Halaman</p>
    <p class="m-0">Berat</p>
    <p class="fw-bold fs-5">200 gr</p>
    <p class="m-0">Ukuran</p>
    <p class="fw-bold fs-5">19 x 27,5 cm</p>
  </div>
</div>
    <div class="row">
      <div class="container"><hr></div>
      <div class="container" style="text-align: justify;">
        Buku Pesantren Ramadhan hadir sebagai buku yang berisi penjelasan mengenai pengertian dan dasar hukum puasa ramadhan, syarat sah, syarat wajib & rukun dalam menjalankan ibadah puasa, panduan amalan dan ibadah wajib dan sunah di bulan Ramadhan, beserta lembar kegiatan harian di bulan ramadhan untuk pelajar jenjang SD/MI/sederajat.
      </div>
      <div class="container mt-4 text-center">
        <div class="btn btn-danger">HABIS</div>
      </div>
    </div>
</div>
@endsection