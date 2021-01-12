@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/danaucermin.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Danau Cermin</h3>
                <p class="card-text font" >Sesuai dengan namanya, Danau Cermin di Balikpapan bakal pukau 
				kamu dengan kemampuannya memantulkan alam sekitar layaknya sebuah cermin. Destinasi tempat 
				wisata di Balikpapan ini terbentuk setelah sebuah tanah kosong dikeruk untuk kebutuhan proyek, 
				kemudian hasil cekungannya menampung air hujan sehingga lahirlah danau indah ini. 
				Dikelilingi dengan rimbunya pepohonan yang teduh, ditambah permukaan air yang sangat jernih membuat 
				tempat wisata di Balikpapan ini jadi buruan penggemar fotografi untuk berburu foto-foto alam Kalimantan yang ekstotis.
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
      <h5 class="card-title">Lokasi: Danau Cermin - Jalan Rawamangun, RT 20, Kelurahan Lamaru</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection