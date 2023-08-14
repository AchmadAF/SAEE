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
    <div class=" d-flex justify-content-center">
      <div class="d-flex justify-content-center">
        <div class="bg-image hover-overlay ripple m-3 shadow-1-strong rounded" data-mdb-ripple-color="light"
          style="max-width: 50rem;">
          <img src="img/tentang/portofolio.png" class="w-100" alt="Louvre" />
          <a href="https://drive.google.com/file/d/1L1UeAsslHdUpRlUbVZFshdC-v-DpxuMj/view?usp=sharing" target="_blank">
            <div class="mask text-light d-flex justify-content-center flex-column text-center"
              style="background-color: rgba(0, 0, 0, 0.7)">
              <strong class="m-0 fs-2"><i class="bi bi-eye-fill me-3"></i>LIHAT</strong>
            </div>
          </a>
        </div>
      </div>
      
    </div>
    <!-- HET -->
  </div>

@endsection