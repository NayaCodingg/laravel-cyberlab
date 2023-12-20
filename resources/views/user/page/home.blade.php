@extends('user.layout.app')

@section('content')

<!-- CSS -->
<link rel="stylesheet" href="/css/style.css">

<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TASTY FOOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">HOME</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" href="/tentang">TENTANG</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/berita">BERITA</a>
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
      <img class="one" src="{{ asset('img/ASET/img-4.png')}}" alt="" />
    <!-- Awal Jumbotron -->
    <div class="fan">
      <div style="width: 80px;px; height: 3px; background-color:black;" class id="horizontal-line"></div> <br>
        <h1 class="helt display-5">HEALTHY</h1>
        <b><h2 class="tas display-15">TASTY FOOD</h2></b>  
        <p class="pra display-15 align-left">
          Lorem ipsum dolor sit amet cons    ectetur adipisicing elit.Phaselius ornare, augue eu rutrum commodo, dui diam convallis arcu,eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra
          ante.
        </p>
        <a class="btn btn-dark btn-lg" href="#" role="button">TENTANG KAMI</a>
    </div>
    <!-- Akhir Jumbotron -->
</nav>
    <!-- Akhir Navbar -->

<!-- Awal Tentang Kami -->
<section id="tentang">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="ten">Tentang Kami</h2>
          </div>
        </div>
        <div class="sert row justify-content-center">
          <div class="col-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.Phaselius ornare, augue eu rutrum commodo, dui diam convallis arcu,eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra
            ante.
          </div>
        </div>
        <br>
        <center><div style="width: 80px;px; height: 3px; background-color:black;" class id="horizontal-line"></div></center>
      </div>
    </section>

    <!-- Akhir Tentang Kami -->

    <!-- Awal Card Web -->
    <div class="row row-cols ">
      <!-- <div style="background-image: url('..img/ASET/Group 70@2x.png');"> -->
        <div class="col-card">
          <div class="card">
            <img src="{{ asset('img/ASET/img-1.png')}}" class="this card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">LOREM IPSUM</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
               <br>Phasellusomare, augue eu rutrum commodo,</p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('img/ASET/img-2.png')}}" class="this card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">LOREM IPSUM</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellusomare, augue eu rutrum commodo,</p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('img/ASET/img-3.png')}}" class="this card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">LOREM IPSUM</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                <br>Phasellusomare, augue eu rutrum commodo,</p>
            </div>
          </div>
          <div class="card">
            <img src="{{ asset('img/ASET/img-4.png')}}" class="this card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">LOREM IPSUM</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusomare, augue eu rutrum commodo,</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    <!-- Akhir Card Web -->

    <!--Awal Berita  -->
    <section class="berita bg-light">
        <div class="judul">
          <h2>Berita Kami</h2>
        </div>
        <div class="row row-berita">
          <div class="col-lg-6">
            <div class="card card-1">
              <img src="{{ asset('img/ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg')}}" class="ber card-img-top" alt="">
              <h3 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, temporibus. Amet expedita illum magnam voluptate debitis temporibus id est soluta, ducimus incidunt, aperiam dignissimos? Sapiente est ducimus temporibus ipsam molestias?</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, temporibus. Amet expedita illum magnam volupt </p>
              <p class="card-text"><small class="text-muted">Baca Selengkapnya</small></p>
            </div>
          </div>
  
          <div class="col-lg half1">
            <div class="col-lg">
              <div class="card card-2">
                <img src="{{ asset('img/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}" class="mage card-img-top" alt="">
                <h3 class="card-title">Lorem, ipsum dolor.</h3>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae id </p>
                <p class="card-text"><small class="text-muted">Baca Selengkapnya</small></p>
              </div>
            </div>
            <div class="col-lg">
              <div class="card card-2">
                <img src="{{ asset('img/ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg')}}" class="mage card-img-top" alt="">
                <h3 class="card-title">Lorem, ipsum dolor.</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, cum  </p>
                <p class="card-text"><small class="text-muted">Baca Selengkapnya</small></p>
              </div>
            </div>
          </div>
          <div class="col-lg half2">
            <div class="col-lg">
              <div class="card card-2">
                <img src="{{ asset('img/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg')}}" class="mage card-img-top" alt="">
                <h3 class="card-title">Lorem, ipsum dolor .</h3>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae id </p>
                <p class="card-text"><small class="text-muted">Baca Selengkapnya</small></p>
              </div>
            </div><br>
            <div class="col-lg">
              <div class="card card-3">
                <img src="{{ asset('img/ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg')}}" class="card-img-top" alt="">
                <h3 class="card-title">Lorem, ipsum dolor.</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, cum  </p>
                <p class="card-text"><small class="text-muted">Baca Selengkapnya</small></p>
              </div>
            </div>
          </div>
        </div>
  
      </section>
      <!-- Akhir Berita -->

      <!-- Awal Galeri -->
     <section class="gallery">
      <div class="judul">
        <h2>Galeri Kami</h2>
      </div>
      <div class="gambar-gal1">
        <img src="{{ asset('img/ASET/brooke-lark-oaz0raysASk-unsplash.jpg')}}" alt="">
        <img src="{{ asset('img/ASET/ella-olsson-mmnKI8kMxpc-unsplash.jpg')}}" alt="">
        <img src="{{ asset('img/ASET/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg')}}" alt="">
      </div>
      <div class="gambar-gal2">
        <img src="{{ asset('img/ASET/jonathan-borba-Gkc_xM3VY34-unsplash.jpg')}}" alt="">
        <img src="{{ asset('img/ASET/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg')}}" alt="">
        <img src="{{ asset('img/ASET/monika-grabkowska-P1aohbiT-EY-unsplash.jpg')}}" alt="">
      </div>
      <a class="btn btn-dark btn-lg" href="#" role="button">LIHAT LEBIH BAYAK</a>
    </section>
      <!-- Akhir Galeri -->

      <!-- Awal Footer -->
      <footer class="footer bg-dark text-white">
        <div class="copy-home">
          <div class="col-lg-4 tasty">
            <h2 class="tas-end">TASTY FOOD</h2>
            <P class="pra-end align-left">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste velit commodi totam, quaerat doloribus, distinctio ab, facilis consequuntur similique aliquam maiores adipisci quis fuga ut optio non? Nulla, nam nesciunt?
            </P>
            <div class="logo">
              <img src="{{asset('img/ASET/001-facebook@2x.png')}}" alt="">
              <img src="{{asset('img/ASET/002-twitter@2x.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-4 two">
            <div class="col-lg-6">
              <h3>Usefull links</h3>
              <div class="pra-end align-left">
                <p>Blog</p>
                <p>Hewan</p>
                <p>Galeri</p>
                <p>Testimonial</p>  
              </div>
            </div>
            <div class="col-lg-6">
              <h3>Privacy</h3>
              <div class="pra-end align-left">
                <p>Karir</p>
                <p>Tetang Kami</p>
                <p>Kontak Kami</p>
                <p>Servis</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h3>Contact info</h3>
            <div class="pra-end align-left">
              <p><img src="{{asset('img/ASET/Group 66@2x.png')}}" alt="">tastyfood@gmail.com</p>
              <p><img src="{{asset('img/ASET/Group 67@2x.png')}}" alt="">+62 000 000 000</p>
              <p><img src="{{asset('img/ASET/Group 68@2x.png')}}" alt="">Kota Bandung, Jawab Barat</p>
            </div>
          </div>

        </div>

        <p class="copyright text-center">copyrigt©2023 All rights reserved</p>

      </footer>
      <!-- Akhir Footer -->

@endsection