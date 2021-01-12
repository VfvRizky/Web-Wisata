@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/pantailamaru.jpg')}}" class="img-fluid" alt="pantaimelawai">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Pantai Lamaru</h3>
                <p class="card-text font" >Selain Pantai Kemala, masih ada beberapa destinasi wisata pantai 
				di Balikpapan yang bisa kamu kunjungi. Salah satunya adalah Pantai Lamaru. Tempat wisata di 
				Balikpapan ini terkenal akan keberadaan pohon-pohon cemara yang mengelilingi bibir pantai menambah 
				sehingga menambah kesejukkan dan atmosfer segar di Pantai Lamaru..</p>
                <p class="card-text"><small class="text-muted"><br><br>Wisata.IN</small></p>
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
      <h5 class="card-title">Lokasi: Pantai Lamaru - Jl. Mulawarman, Lamaru, Balikpapan Timur, Balikpapan, Kaltim.</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection