@extends('user.layout.app')

@section('content')

<!-- CSS -->
@push('css')
<link rel="stylesheet" href="style.css">
@endpush

<div class="containergaleri">

    <div class="section-title">
      <h1 data-aos="fade-up" data-aos-duration="1000">GALERI KAMI</h1>
    </div>

  <!-- SLIDE FOTO -->
    <div class="containerslide bg-light" style=""> 
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="">
        <div class="carousel-inner" style="">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{ asset('assets/img/ASET/ella-olsson-mmnKI8kMxpc-unsplash.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="{{ asset('assets/img/ASET/anna-pelzer-IGfIGP5ONV0-unsplash.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/ASET/monika-grabkowska-P1aohbiT-EY-unsplash.jpg')}}" class="d-block w-100" alt="..." style="object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  <!-- FOTO-FOTO -->
    <div class="containerfotogaleri">
      <!-- baris pertama -->
      <div class="row justify-content-center" style="margin-bottom: 15px;">
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotosatu"></div>
        </div>
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotodua"></div>
        </div>
        <div class="col-md-3">
          <div class="fototiga" data-aos="fade-left" data-aos-duration="1000"></div>
        </div>
        <div class="col-md-3">
          <div class="fotoempat" data-aos="fade-left" data-aos-duration="1000"></div>
        </div>
      </div>
      <!-- baris kedua -->
      <div class="row justify-content-center" style="margin-bottom: 15px;">
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotolima"></div>
        </div>
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotoenam"></div>
        </div>
        <div class="col-md-3">
          <div class="fototujuh" data-aos="fade-left" data-aos-duration="1000"></div>
        </div>
        <div class="col-md-3">
          <div class="fotodelapan" data-aos="fade-left" data-aos-duration="1000"></div>
        </div>
      </div>
      <!-- baris ketiga -->
      <div class="row justify-content-center">
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotosembilan"></div>
        </div>
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000">
          <div class="fotosepuluh"></div>
        </div>
        <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000">
          <div class="fotosebelas"></div>
        </div>
        <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000">
          <div class="fotoduabelas"></div>
        </div>
      </div>
    </div>           
</div>

@endsection
