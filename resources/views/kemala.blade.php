@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/pantaikemala.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Pantai Kemala</h3>
                <p class="card-text font" >Sebagai kota pelabuhan, pantai menjadi objek wisata di Balikpapan yang cukup 
				mudah ditemukan. Namun, salah satu yang paling populer dan mudah dijangkau tentu saja adalah Pantai Kemala. 
				Karena terletak di jantung Kota Balikpapan, kamu tidak perlu berkelana melewati kelok-kelok perbukitan untuk
				mencapai wisata pantai di Balikpapan ini. Sesampainya di sana, kamu dapat menikmati pasir lembut dan ombak 
				tenang, atau bermain banana boat dan jet ski.



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
      <h5 class="card-title">Lokasi: Pantai Kemala - Jl. Jenderal Sudirman</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection