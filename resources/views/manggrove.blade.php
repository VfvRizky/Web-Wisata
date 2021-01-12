@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/manggrovecenter.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Manggrove</h3>
                <p class="card-text font" >Menyusuri Sungai Somber Dengan Kelotok
				Di tepi Sungai Somber, Balikpapan, sulit dipercaya bahwa sebuah Mangrove Center 
				seluas 150 hektar dibina sebatang kara oleh seorang pria bernama Agus Bei. Walaupun 
				sempat dipandang sebelah mata oleh warga sekitar, kini ratusan turis berdatangan ke 
				tempat wisata di Balikpapan ini setiap bulannya untuk menyusuri sungai dengan perahu 
				kelotok dan menyejukkan diri di hutan yang telah ia bangun. Bila kamu berencana mampir, 
				jangan lupa perhatikan sekitar untuk ragam flora serta satwa bekantan!
				</p>
                <p class="card-text"><small class="text-muted">Wisata.IN</small></p>
              </div>
            </div>
          </div>
        </div>       
          
      </div>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-header">
      <div class="container">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link active" href="/balikpapan">Balikpapan</a>
          </li> 
        </ul>
        
      </div>
    </div>
	<div class="lokasi">
    <div class="card-body">
      <h5 class="card-title">Lokasi: Mangrove Center Graha Indah - Graha Indah Gang Mangrove VI RT.14, Batu Ampar</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection