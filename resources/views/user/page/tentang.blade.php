@extends('user.layout.app')

@section('content')

<!-- CSS -->
@push('css')
<link rel="stylesheet" href="style.css">
@endpush

<!-- Awal Nav Tentang -->
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
                <a class="nav-link active" aria-current="page" href="/tentang">TENTANG</a>
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
            <h1 class="pad text-white">TENTANG KAMI</h1>
      </nav>
<!-- Akhir Nav Tentang -->

<div class="containertentang">
    <div data-aos="fade-up"
     data-aos-duration="1000" class="section-tittle">
      <h1>TENTANG KAMI</h1>
    </div>

    <div class="tastyfood">
        <div class="row justify-content-center bg-light" style=""><br><br><br>
            <div data-aos="fade-up"
     data-aos-duration="1000" class="col-lg-6" style="">
                <h2 style="">TASTY FOOD</h2>
                <b><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus atque, iure quaerat quidem cupiditate non amet exercitationem alias expedita in deleniti, incidunt totam architecto saepe porro veritatis. Velit illum quaerat corporis quia alias! Alias, nulla.</p></b>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse autem pariatur doloribus ad atque accusamus asperiores, tempora assumenda maxime eaque voluptas odio corrupti obcaecati ducimus quia tenetur praesentium rem recusandae et dicta reiciendis, perferendis animi odit.</p>
            </div>
            <div data-aos="fade-up"
     data-aos-duration="1000" class="boximage1">
            </div>
             <div data-aos="fade-up"
     data-aos-duration="1000" class="boximage2">

            </div>
        </div>      
    </div><br>

    <!--  VISI MISI -->

    <div class="containervisimisi">
      
      <!-- VISI -->
      <div class="visi" style="">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="boximage3" style="display: inline-block;">

            </div>
            <div class="boximage4" style="display: inline-block;">

            </div>
          </div>

          <div class="col-6"><br>
            <h2>VISI</h2><br><br><br>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos magni modi vitae, ab nobis ratione magnam accusantium laborum rem architecto. Voluptas ea voluptatibus libero saepe, ducimus nisi nihil quod eaque est soluta corporis nam dolorem? Ea, ullam non. Fugit asperiores quasi unde dignissimos tenetur modi, iusto voluptatem recusandae animi vitae inventore eos nisi reprehenderit facere quos necessitatibus quibusdam similique nostrum perspiciatis quod esse, magni dolore accusantium quae! Nihil inventore error, culpa veniam quam hic sapiente. Iusto corrupti tenetur dolores nesciunt labore quod?</P>
          </div>
        </div>
      </div>
      <br><br><br><br>

      <!-- MISI -->
      <div class="misi">
          <div class="row justify-content-center">
            <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-6" style="">
              <h2 style="">MISI</h2>
              <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius saepe quibusdam sint? Quam dolores, placeat dicta similique aliquid repellat iure sunt, omnis nisi nostrum vel tempore autem alias impedit dolorum minima quaerat fugiat veniam. Quidem, sint modi consectetur impedit aliquid similique ipsam delectus? Fuga excepturi reiciendis provident. Commodi quae similique placeat molestias autem, iure ex ipsum sequi quam id minima laudantium? Id dignissimos, alias iure ipsum tenetur officia expedita laborum! Id, et. Ea similique et rem dolores laboriosam, quibusdam nihil accusantium. Tempora.</P>
            </div>
    
              <div data-aos="fade-left" data-aos-duration="1000" class="boximage5">
    
              </div>
          </div>  
      </div>
    </div>
</div>

@endsection