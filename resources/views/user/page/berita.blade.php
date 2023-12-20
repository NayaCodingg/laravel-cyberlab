@extends('user.layout.app')

@section('content')

<!-- CSS -->
@push('css')
<link rel="stylesheet" href="style.css">
@endpush

<!-- Awal Berita -->
<nav class="navbar-about navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
          <a class="navbar-brand collap" href="#">TASTY FOOD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse-about navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tentang">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/berita">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/post">GALERI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
            <h1 class="pad text-white">BERITA KAMI</h1>
      </nav>
<!-- Akhir Kontak -->

<div class="containerberita">
    <div class="section-tittle">
        <h1 data-aos="fade-up" data-aos-duration="1000">BERITA KAMI</h1>
    </div>

    <div class="containerberitakami">
        <div class="row justify-content-center bg-light" style="">
            <div class="boximageberita" style="" data-aos="fade-right" data-aos-duration="1000"></div>
            <div class="col-6" style="" data-aos="fade-left" data-aos-duration="1000">
                <b><h2 style="font-weight: bolder; font-family: Tahoma, Times, serif;">APA SAJA MAKANAN KHAS NUSANTARA?</h2></b>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus ipsam ipsum nisi id natus delectus odio ad, animi vitae earum doloribus in corporis deleniti necessitatibus asperiores! Sit dolorem consequuntur eum, modi exercitationem nesciunt. Consequatur, reprehenderit excepturi!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia commodi natus asperiores officia, voluptatem vel iusto vitae iure ad! Qui, eveniet dolorem accusamus dicta saepe nesciunt earum ipsum asperiores non quasi sit dolor mollitia explicabo corrupti!</p>
                <button class="btn">BACA SELENGKAPNYA</button>
            </div>
        </div>
    </div>

    <div class="container text-start" id="beritalainnya" data-aos="fade-up" data-aos-duration="1000">
        <div class="tittle">
            <h2 style="font-family: Arial; font-weight: bold;">BERITA LAINNYA</h2>
        </div>
        <!-- berita baris pertama -->
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div><br>
        
        <!-- berita baris kedua -->
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('assets/img/ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h4 class="card-tittle">LOREM IPSUM</h4></b>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection