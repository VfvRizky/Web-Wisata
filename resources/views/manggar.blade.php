@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/pantaimanggar.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Pantai Manggar</h3>
                <p class="card-text font" >Pantai Manggar Segara Sari ini merupakan salah satu objek wisata 
				pantai yang paling ramai di padati oleh para wisatawan setiap harinya, yang di mana pantai 
				dengan luas 13.000 m2 dengan air laut yang jernih, riak gelombang yang kecil serta pasir yang 
				putih, merupakan tempat yang nyaman bagi mereka yang ingin bermain, berlayar maupun volley 
				pantai. Kontur pantai dan suasananya lebih kurang sama dengan pantai Lamaru, berpasir agak putih 
				dan ada pohon pinus di pinggirnya. Di sekitar pantai juga banyak dijumpai tempat penyewaan pelampung 
				dengan aneka bentuk dan warna. Pohon-pohon yang ada di sekitar pantai pun turut memberikan kesan teduh 
				dan sejuk. Menariknya fasilitas di pantai ini bisa dibilang lebih komplit dibanding pantai-pantai lain 
				yang ada di Balikpapan.</p>
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
      <h5 class="card-title">Lokasi : Pantai Manggar Segarsari – Jl. Pantai Manggar Segarasari, Manggar Baru, Kec. Balikpapan Timur, Kota Balikpapan.</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection