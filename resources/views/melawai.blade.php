@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/pantaimelawai.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Pantai Melawai</h3>
                <p class="card-text font" >Wisata pantai lainnya di Balikpapan yang tak kalah menarik untuk 
				dikunjungi adalah Pantai Melawai. Berada dekat tengan pusak kota Balikpapan, objek wisata di Balikpapan 
				satu ini menjadi destinasi favorit khusunya bagi kalangan muda-mudi. 
				Meskipun tidak memiliki garis pantai sepanjang pantai-pantai di Balikpapan lainnya, pemandangan di Pantai 
				Melawat tetap tak kalah cantik, terutama ketika momem matahari terbenam-nya


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
      <h5 class="card-title">Lokasi: Pantai Melawai - Jl. Pelabuhan Semayang, Prapatan, Balikpapan Kota, Kota Balikpapan, Kalimantan Timur</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection