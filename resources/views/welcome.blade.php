@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Home - PetQoo RSH IPB University
@endsection

@section('OuterInclude')

    {{-- <script src="{{ asset('js/profile_update.js') }}"></script> --}}
@endsection
@section('ContentOfBody')
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
   
   .carousel-inner{
    height: 450px;
    background-color: rgba(255, 0, 0, 0.5);
}
.carousel-caption {
  font-family: 'Montserrat';
}
.carousel-caption h3 {
  background-color: #fff;
  color: #000;
  mix-blend-mode: screen;
  top: 0%;
  left: 0%;
  right:0%;
  bottom : 60%;
  transform: translate(0%, -50%);
  padding: 16px;
  border-radius: 8px;
  font-family: 'Montserrat'
  font-size: 9px;
  margin: 0;
  opacity: 0.9;
}

.carousel-caption p {
  background-color:#7cbdb5;
  color: #000;
  mix-blend-mode: screen;
  top: 0%;
  left: 0%;
  right:0%;
  bottom : 60%;
  transform: translate(0%, -50%);
  padding: 16px;
  border-radius: 8px;
  font-family: 'Montserrat'
  font-size: 9px;
  margin: 0;
  opacity: 0.9;
}
.carousel-caption h3:last-child {
  mix-blend-mode: normal;
  color: transparent;
  background: none;
  box-shadow: 0 0 10px #000, 0 0 32px #000;
}


span {
  color: white;
  filter: alpha(opacity=100);
  opacity: 1;
}

h1 {
    font-family: 'Montserrat';font-size: 30px;
}
h2 {
    font-family: 'Montserrat';font-size: 20px;
}

      .img-container {
        text-align: center;
        display: block;
      }

</style>
<div class="container">
  <br>
    <h1 class="text-center" style="color: #ff4a5a"> <b> Welcome to PetQoo - RSH IPB University</b></h1>
    <body>
    <span class="img-container"> <!-- Inline parent element -->
    <br>
      <img src="favi.png" alt="">
    </span>
  </body>
    <hr>
    <p class="text-center" style="font-size: 40px; color: #FAFAFA">
      <h2 class="text-center">Find and book a doctor appointment for your pet right now</h2>
    </p>
    <br>
</div>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      
      <div class="item active">
        <img src="picture/1 (1).jpg">
        
          <!-- caption -->
          <div class="carousel-caption">
                <h3>PetQoo Solusi Terbaik Untuk Anda</h3>
                <p>Dengan PetQoo Anda tidak perlu buang-buang waktumu dengan antrean yang panjang. Cukup buat appoinment dengan dokter hewan yang Anda inginkan secara online</p>
              </div>
      </div>
                    
      <div class="item ">
        <img src="picture/1 (2).jpg">

          <!-- caption -->
          <div class="carousel-caption"> <span>
                <h3>Cari Tahu Jadwal Dokter Hewan dan buat appointment dengan Mudah</h3>
                <p>Tak perlu susah-sudah datang langsung ke RSH, anda bisa tahu jadwal dokter kami dengan mudah lewat PetQoo</p>
              </div>
      </div>

 
      <div class="item ">
        <img src="picture/1 (3).jpg">

          <!-- caption -->
          <div class="carousel-caption"> 
                <h3>PetQoo, Sahabat Hewan Peliharaanmu</h3>
                <p>Antrean yang panjang membuat hewan peliharaanmu tidak nyaman untuk menunggu, dengan PetQoo, jangan khawatirkan hal itu</p> 
              </div>
                
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

@endsection

