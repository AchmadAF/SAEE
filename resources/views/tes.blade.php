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
  <h1 class="text-center">SAMPLE BUKU KEAGAMAAN </h1>
  <div class="d-flex justify-content-center col-md-3">
    <div class="bg-image hover-overlay ripple m-3 shadow-1-strong rounded" data-mdb-ripple-color="light"
      style="max-width: 20rem;">
      <img src="img/katalog/agama/1.png" class="w-100" alt="Louvre" />
      {{-- <a href="https://drive.google.com/file/d/1MG7n5JIuKg7u30YoAtvtTMG4KF8NCmo6/view?usp=sharing" target="_blank">
        <div class="mask text-light d-flex justify-content-center flex-column text-center"
          style="background-color: rgba(0, 0, 0, 0.7)">
          <strong class="m-0 fs-6 "></strong>
        </div>
      </a> --}}
    </div>
  </div>
  <div class="col">
    <ul class="nav nav-tabs" id="myTab">
      <li class="nav-item">
          <a href="#home" class="nav-link active" data-bs-toggle="tab">Deskripsi</a>
      </li>
      <li class="nav-item">
          <a href="#profile" class="nav-link" data-bs-toggle="tab">Deskripsi</a>
      </li>
      <li class="nav-item">
          <a href="#messages" class="nav-link" data-bs-toggle="tab">Deskripsi</a>
      </li>
  </ul>
  <div class="tab-content">
      <div class="tab-pane fade show active" id="home">
          <h4 class="mt-2">Home tab content</h4>
          <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
      </div>
      <div class="tab-pane fade" id="profile">
          <h4 class="mt-2">Profile tab content</h4>
          <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
      </div>
      <div class="tab-pane fade" id="messages">
          <h4 class="mt-2">Messages tab content</h4>
          <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
      </div>
  </div>
  </div>
</div>
    
</div>

@endsection