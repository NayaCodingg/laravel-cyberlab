@extends('user.layout.app')

@section('content')

<!-- CSS -->
<link rel="stylesheet" href="style.css">
  
<!-- Awal Kontak -->
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
                <a class="nav-link" href="/berita">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/post">GALERI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/contact">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
            <h1 class="pad text-white">KONTAK KAMI</h1>
      </nav>
<!-- Akhir Kontak -->

<!-- KONTEN KONTAK -->
<div class="containerkontak">

            <div class="section-title">
              <h1>KONTAK KAMI</h1>
            </div>
            
            <div class="containerkom en">
              <div class="row">
                <h2>KONTAK KAMI</h2><br>

                <div class="col">
                  <form action="{{ route('kontak.store') }}" method="post">
                    @csrf
                    <div class="input-group">
                      <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>
                    <div class="input-group">
                      <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="input-group">
                      <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="col">
                  <div class="input-group-massage">
                    <textarea name="massage" id="massage" placeholder="Massage"></textarea>
                  </div>
                </div>

                <button type="submit" class="btn">KIRIM</button>
                </form>  
              </div>
            </div>

            <div class="container-circle text-center">
              <div class="row justify-content-center">
                <div class="col-4">
                  <div class="email">
                  <img src="{{ asset('assets/img/ASET/Group 66.png')}}" alt="">
                    <b><p>EMAIL</p></b>
                    <p>tastyfood@gmail.com</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="phone">
                  <img src="{{ asset('assets/img/ASET/Group 67.png')}}" alt="">
                    <b><p>PHONE</p></b>
                    <p>+62 819 1291 1659</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="location">
                  <img src="{{ asset('assets/img/ASET/Group 68.png')}}" alt="">
                    <b><p>LOCATION</p></b>
                    <p>kota Bandung, Jawa Barat</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row-peta bg-light">             
              <div class="container text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56400422749!2d107.56075478156825!3d-6.903442379289441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1698726158676!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
@endsection